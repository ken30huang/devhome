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
        $alldatas = $table->select(array('order'=>'task_id ASC','where'=>' AND proj_id='.$proj_id));
        $rows = array();
        foreach($alldatas as $all) {
            if($all['task_pid'] == 0) {
                $rows[$all['task_id']] = array('task_name'=>$all['task_name'] ,'proj_id'=>$all['proj_id'], 'childs'=>array());
            } else if($all['task_pid'] > 0) {
                $rows[$all['task_pid']]['childs'][] = $all;
            }
        }

        $this->view->assign('rows' , $rows);
        $this->view->assign('proj_id' , $proj_id);
        $this->view();
    }

    public function funcsadd() {
        $proj_id = $this->http->inputGet('proj_id');
        $task_pid = $this->http->inputGet('task_pid');
        $table = TableModel::getInstance('proj_task' , 'task_id');
        $row = $table->data('task_id', $this->http->inputGet('task_id'))->getRow();
        $this->view->assign('row' , $row);
        $this->view->assign('proj_id' , $proj_id);
        $this->view->assign('task_pid' , intval($task_pid));
        $this->view();
    }

    public function funcsave() {
        $table = TableModel::getInstance('proj_task' , 'task_id');
        $table->data($this->http->inputAll())->save();
        $this->http->success()->json();
    }

    public function funcsdel() {
        $table = TableModel::getInstance('proj_task' , 'task_id');
        $table->data('task_id', $this->http->inputPost('del_id'))->deleteById();
        $this->http->success()->json();
    }

}
?>