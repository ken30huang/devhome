<?php
class AdminDemoController extends AdminController {


    public function index() {

        $this->checkLogin();
        $cmodel = $this->getModel('demo');
        $page = intval($this->http->inputGet('page'));
        $page = $page==0 ? 1 : $page;
        $pageData = $cmodel->setPageNum($page)->getPageData();
        $this->view->assign('rows' , $pageData['rows']);
        $this->view->assign('pager' , show_pagenums($page , $pageData['count'] , $cmodel->getPageSize() , "/admin/article"));
        $this->view();
    }

    public function del() {
        $model = $this->getModel('demo');
        $demo_id = $this->http->inputPost('del_id');
        $model->data('demo_id' , $demo_id)->deleteById();
        $this->http->success()->json();
    }
}
?>