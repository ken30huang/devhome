<?php
class AdminTagController extends AdminController {

    public function index() {

        $rows = $this->getModel('tag')->select(array('order'=>'tag_id ASC'));
        $this->view->assign('rows' , $rows);
        $this->view();
    }

    public function del() {
        $this->web->setReq('tag_id' , $this->web->reqPost('del_id'));
        $this->getModel('tag')->deleteById();
        $this->getJSON();
    }
}
?>