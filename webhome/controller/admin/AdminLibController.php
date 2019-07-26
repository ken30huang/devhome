<?php
class AdminLibController extends AdminController {

    public function index() {
        $cmodel = $this->getModel('lib');
        $page = intval($this->web->req('page'));
        $page = $page==0 ? 1 : $page;
        $pageData = $cmodel->setPageNum($page)->getPageData();
        $this->view->assign('rows' , $pageData['rows']);
        $this->view->assign('pager' , show_pagenums($page , $pageData['count'] , $cmodel->getPageSize() , "/admin/series"));
        $this->view();
    }

    public function save() {
        $this->getModel('lib')->save();
        $this->getJSON();
    }

    public function del() {
        $this->web->setReq('lib_id' , $this->web->reqPost('del_id'));
        $this->getModel('lib')->deleteById();
        $this->getJSON();
    }

    public function add() {
        $cmodel = $this->getModel('lib');
        $row = $cmodel->getRow();
        $this->view->assign('row' , $row);
        $this->view();
    }

}
?>