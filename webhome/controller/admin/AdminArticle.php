<?php
class AdminArticleController extends AdminController {

    private $c_type = 'article';

    public function index() {
        $cmodel = $this->getModel('content');
        $page = intval($this->http->inputGet('page'));
        $page = $page==0 ? 1 : $page;
        $pageData = $cmodel->setPageNum($page)->getPageData($this->c_type);
        $this->view->assign('rows' , $pageData['rows']);
        $this->view->assign('pager' , show_pagenums($page , $pageData['count'] , $cmodel->getPageSize() , "/admin/article"));
        $this->view();
    }

    public function save() {
        $tmodel = $this->getModel('tag');
        $post = $this->http->inputPost();
        $tags = explode(',', $this->c_type);
        $post['c_type'] = date('Y-m-d H:i:s');
        $tags = explode(',',$post['c_tag']);
        foreach($tags as $tname) {
            if(empty($tname)) continue;
            $tcount = $tmodel->getCount(" AND tag_name='".$tname."'");
            if($tcount == 0) {
                $tmodel->data(array('tag_name'=>$tname))->save();
            }
        }
        if(intval($post['c_id']) == 0) {
            $post['c_pubdate'] = date('Y-m-d H:i:s');
        }
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
        $tmodel = $this->getModel('tag');
        $row = $cmodel->getRow();
        $tagRows = $tmodel->select();

        $this->view->assign('row' , $row);
        $this->view->assign('tags' , $tagRows);
        $this->view();
    }

}
?>