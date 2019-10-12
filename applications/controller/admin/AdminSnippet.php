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

        $codenames = array();
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
        if(intval($post['c_id']) == 0) {
            $post['c_pubdate'] = date('Y-m-d H:i:s');
        }
        $post['c_type'] = $this->c_type;
        $this->getModel('content')->data($post)->save();
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
        $this->view->assign('code_list' ,  $this->getModel('category')->getChilds(15));
        $this->view->assign('row' , $row);
        $this->view();
    }

}
?>