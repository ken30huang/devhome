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

    public function info() {
        
        $model = $this->getModel('tag');
        $row = $model->data('tag_id', $this->http->inputPost('edit_id'))->getRow();
        $this->http->res('row',$row)->success()->json();
    }

    public function save() {
        $model = $this->getModel('tag');
        $row = $model->data($this->http->inputPost())->save();
        $this->http->success()->json();
    }
}
?>