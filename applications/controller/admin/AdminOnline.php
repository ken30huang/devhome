<?php
class AdminOnlineController extends AdminController {

    public function index() {
        $this->checkLogin();
        $cmodel = $this->getModel('online');
        $this->view->assign('rows' , $cmodel->order($cmodel->getKey().' desc')->query());
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
        $cmodel->data($cmodel->getKey() , $this->http->inputPost('del_id'))->deleteById();
        $this->http->success()->json();
    }

    public function add() {
        $cmodel = $this->getModel('online');
        $row = $cmodel->data($cmodel->getKey() , $this->http->inputGet('env_id'))->getRow();
        $this->view->assign('row' , $row);
        $this->view();
    }

}
?>