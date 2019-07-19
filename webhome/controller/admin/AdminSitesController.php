<?php
class AdminSitesController extends AdminController {

    public function index() { 
        $table = TableModel::getInstance('sites' , 'site_id');
        $rows = $table->select(array('order'=>'site_id DESC'));
        $this->view->assign('rows' , $rows);
        $this->view();
    }

    public function save() {
        $table = TableModel::getInstance('sites' , 'site_id');
        $table->save();
        $this->getJSON();
    }

    public function del() {
        $this->web->setReq('site_id' , $this->web->reqPost('del_id'));
        $table = TableModel::getInstance('sites' , 'site_id');
        $table->deleteById();
        $this->getJSON();
    }

    public function info() {
        $this->web->setReq('site_id' , $this->web->reqPost('edit_id'));
        $table = TableModel::getInstance('sites' , 'site_id');
        $row = $table->getRow();
        $this->setResult('row' , $row)->getJSON();
    }

}
?>