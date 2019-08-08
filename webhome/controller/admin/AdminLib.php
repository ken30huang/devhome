<?php
class AdminLibController extends AdminController {

    public function index() {
        $cmodel = $this->getModel('lib');
        $page = intval($this->http->inputGet('page'));
        $page = $page==0 ? 1 : $page;
        $pageData = $cmodel->setPageNum($page)->getPageData();
        $this->view->assign('rows' , $pageData['rows']);
        $this->view->assign('pager' , show_pagenums($page , $pageData['count'] , $cmodel->getPageSize() , "/admin/series"));
        $this->view();
    }

    public function save() {
        $post = $this->http->inputPost();
        $this->getModel('lib')->data($post)->save();
        $this->http->success()->json();
    }

    public function del() {
        $this->getModel('lib')->data('lib_id' , $this->http->inputPost('del_id'))->deleteById();
        $this->http->success()->json();
    }

    public function add() {
        $cmodel = $this->getModel('lib');
        $row = $cmodel->data('lib_id' , $this->http->inputGet('lib_id'))->getRow();
        $this->view->assign('row' , $row);
        $this->view();
    }

}
?>