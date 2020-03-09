<?php
class AdminOnlineController extends AdminController {

    public function index() {
        $this->checkLogin();
        $cmodel = $this->getModel('online');
        $this->view->assign('rows' , $cmodel->order('ol_id desc')->query());
        $this->view();
    }

    public function save() {
        $cmodel = $this->getModel('online');
        $post = $this->http->inputPost();
        $cmodel->data($post)->save();
        $this->http->success()->json();
    }

    public function del() {
        $cmodel = $this->getModel('online');
        $cmodel->data('ol_id' , $this->http->inputPost('del_id'))->deleteById();
        $this->http->success()->json();
    }

    public function add() {
        $cmodel = $this->getModel('online');
        $row = $cmodel->data('ol_id' , $this->http->inputGet('ol_id'))->getRow();
        $this->view->assign('row' , $row);
        $this->view();
    }

}
?>