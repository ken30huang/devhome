<?php
class AdminTagController extends AdminController {

    public function index() {

        $this->checkLogin();
        $rows = $this->getModel('tag')->select(array('order'=>'tag_id ASC'));
        $this->view->assign('rows' , $rows);
        $this->view();
    }

    public function del() {
        $this->getModel('tag')->data('tag_id' , $this->http->inputPost('del_id'))->deleteById();
        $this->http->success()->json();
    }
}
?>