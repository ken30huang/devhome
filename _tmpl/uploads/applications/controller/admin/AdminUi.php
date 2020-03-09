<?php
class AdminUiController extends AdminController {


    public function index() {

        $this->checkLogin();
        $uimodel = $this->getModel('ui');
        $rows = $uimodel->order('ui_id ASC')->query();
        $this->view->assign('rows' , $rows);
        $this->view();
    }

    public function save() {
        $uimodel = $this->getModel('ui');
        $uimodel->data($this->http->inputPost())->save();
        $this->http->success()->json();
    }

    public function del() {
        $this->getModel('ui')->data('ui_id' , $this->http->inputPost('del_id'))->deleteById();
        $this->http->success()->json();
    }

    public function add() {
        $uimodel = $this->getModel('ui');
        $row = $uimodel->data('ui_id' , $this->http->inputGet('ui_id'))->getRow();
        $this->view->assign('row' , $row);
        $this->view();
    }

    public function active() {
        $ui_id = intval($this->http->inputGet('ui_id'));
        $this->getModel('ui')->data(array('ui_isactive'=>0))->modify('ui_id!='.$ui_id);
        $this->getModel('ui')->data(array('ui_isactive'=>1))->modify('ui_id='.$ui_id);
        $this->http->redirect('/admin/ui');
    }

}
?>