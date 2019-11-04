<?php
class AdminSnippetController extends AdminController {

    private $c_type = 'snippet';

    public function index() {

        $this->checkLogin();
        $cmodel = $this->getModel('content');
        $category_model = $this->getModel('category');
        $page = intval($this->http->inputGet('page'));
        $page = $page==0 ? 1 : $page;
        $pageData = $cmodel->setPageNum($page)->getPageData($this->c_type);

        $codenames = array('0'=>'未分类');
        foreach($category_model->getChilds(15) as $codeitem) {
            $codenames[$codeitem['cate_id']] = $codeitem['cate_name'];
        }

        $this->view->assign('rows' , $pageData['rows']);
        $this->view->assign('codenames' , $codenames);
        $this->view->assign('pager' , show_pagenums($page , $pageData['count'] , $cmodel->getPageSize() , "/admin/".$this->c_type));
        $this->view();
    }

    public function save() {
        $post = $this->http->inputPost();
        $c_model = $this->getModel('content');
        if(intval($post['c_id']) == 0) {
            $post['c_pubdate'] = date('Y-m-d H:i:s');
        }
        $post['c_type'] = $this->c_type;
        $files = json_decode($post['files'] , true);
        unset($post['files']);
        $c_model->data($post)->save();
        $c_id = $c_model->getInsertID();

        $cs_model = TableModel::getInstance('content_snippet' , 'cs_id');
        $cs_model->deleteByWhere('c_contid='.$c_id);
        foreach($files as $file_key=>$file_item) {
            $save_data = array();
            $save_data['c_cateid'] = $post['c_cateid'];
            $save_data['c_contid'] = $c_id;
            $save_data['c_filename'] = $file_key;
            $save_data['c_filecont'] = $file_item['content'];
            if(isset($post['c_seokeyword'])) {
                $save_data['c_seokeyword'] = $post['c_seokeyword'];
            }
            $cs_model->data($save_data)->save();
        }
        

        $this->http->success()->json();
    }

    public function del() {
        $table = TableModel::getInstance('content' , 'c_id');
        $table->data('c_id' , $this->http->inputPost('del_id'))->deleteById();
        $this->http->success()->json();
    }

    public function add() {

        $cmodel = $this->getModel('content');
        $row = $cmodel->data('c_id' , $this->http->inputGet('c_id'))->getRow();
        $fileconts = array();
        $this->view->assign('code_list' ,  $this->getModel('category')->getChilds(15));
        $this->view->assign('row' , $row);
        if($row) {
            $cs_model = TableModel::getInstance('content_snippet' , 'c_fileid');
            $fileconts = $cs_model->where('c_contid='.$row['c_id'])->query();
        }
        $this->view->assign('fileconts' , $fileconts);
        $this->view();
    }

    public function ondata() {
        $pageNo = $this->http->inputPost('pageNo');
        $data = $this->http->curlReq('https://gitee.com/api/v5/gists?access_token=1daeb8dfc2ae14b50b9e8274cba965fe&page='.$pageNo.'&per_page=20');
        $this->http->res('rows' , json_decode($data , true))->success()->json();
    }

}
?>