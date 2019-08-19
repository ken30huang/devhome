<?php
class ProjectTaskController extends ProjectBaseController {

    public function index() {
        $proj_id = $this->uri->get(3);
        $task_model = $this->getModel('task');
        $task_rows = $task_model->select(array('where'=>' AND proj_id='.$proj_id, 'order'=>'task_id ASC'));
        $task_list = array();
        $task_map = array();
        foreach($task_rows as $task) {
            $task_id = $task['task_id'];
            if(!isset($task_map[$task_id]) && $task['task_pid']==0) {
                $task_map[$task_id] = array(
                    'task_name'=>$task['task_name'],
                    'task_childs'=>array()
                );
            }
            if($task['task_pid'] > 0) {
                if(isset($task_map[$task['task_pid']])) {
                    $task_map[$task['task_pid']]['task_childs'][] = $task;
                }
            }
        }

        
        $proj_model = $this->getModel('project');
        $proj_row = $proj_model->data('proj_id', intval($proj_id))->getRow();
        $this->view->assign('proj_row' , $proj_row);
        $this->view->assign('proj_id' , $proj_id);
        $this->view->assign('task_list' , $task_list);
        $this->view->assign('task_map' , $task_map);
        $this->view();
    }

    public function add() {
        $proj_id = $this->uri->get(3);
        $proj_model = $this->getModel('project');
        $proj_row = $proj_model->data('proj_id', intval($proj_id))->getRow();
        $this->view->assign('proj_row' , $proj_row);
        $this->view();
    }

    public function save() {
        $post = $this->http->inputPost();
        $data = array();
        $task_model = $this->getModel('task');
        $task_result = $task_model->where(" task_mindid='".$post['id']."'")->range(0 , 1)->query();
        if(count($task_result) > 0) {
            $data = $task_result[0];
        }
        $data['task_name'] = $post['text'];
        $data['task_mindid'] = $post['id'];
        $task_model->data($data)->save();
        $this->http->success()->json();
    }

    
}
?>