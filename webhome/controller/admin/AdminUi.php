<?php
class AdminUiController extends AdminController {


    public function index() {
        $uimodel = $this->getModel('ui');
        $rows = $uimodel->order('ui_id ASC')->query();
        $this->view->assign('rows' , $rows);
        $this->view();
    }

    public function save() {
        $uimodel = $this->getModel('ui');
        $uimodel->save();
        $this->getJSON();
    }

    public function del() {
        $this->web->setReq('ui_id' , $this->web->reqPost('del_id'));
        $this->getModel('ui')->deleteById();
        $this->getJSON();
    }

    public function add() {
        $uimodel = $this->getModel('ui');
        $row = $uimodel->getRow();
        $this->view->assign('row' , $row);
        $this->view();
    }

    public function active() {
        $ui_id = intval($this->web->reqGet('ui_id'));
        $this->getModel('ui')->setData(array('ui_isactive'=>0) , 'ui_id!='.$ui_id);
        $this->getModel('ui')->setData(array('ui_isactive'=>1) , 'ui_id='.$ui_id);
        $this->web->redirect('/admin/ui');
    }

}
?>