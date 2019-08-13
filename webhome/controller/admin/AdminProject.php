<?php
class AdminProjectController extends AdminController {

    public function index() {

        $table = TableModel::getInstance('projects' , 'proj_id');
        $rows = $table->select(array('order'=>'proj_id ASC'));

        $this->view->assign('rows' , $rows);
        $this->view();
    }

    public function save() {
        $table = TableModel::getInstance('projects' , 'proj_id');
        $table->data($this->http->inputAll())->save();
        $this->http->success()->json();
    }

    public function del() {
        $table = TableModel::getInstance('projects' , 'proj_id');
        $table->data('proj_id', $this->http->inputPost('del_id'))->deleteById();
        $this->http->success()->json();
    }

    public function add() {
        $table = TableModel::getInstance('projects' , 'proj_id');
        $row = $table->data('proj_id', $this->http->inputGet('proj_id'))->getRow();
        $this->view->assign('row' , $row);
        $this->view();
    }

    public function funcs() {
        $proj_id = $this->http->inputGet('proj_id');
        $table = TableModel::getInstance('proj_task' , 'task_id');
        $rows = $table->select(array('order'=>'task_id DESC','where'=>'proj_id='.$proj_id.' AND task_id='));
        $this->view->assign('rows' , $rows);
        $this->view->assign('proj_id' , $proj_id);
        $this->view();
    }

    public function mindsadd() {
        
    }

    public function mindssave() {
        
    }

    public function mindsdel() {
        
    }

}
?>