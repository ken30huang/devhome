<?php
class ProjectIndexController extends ProjectBaseController {

    public function index() {
        $proj_model = $this->getModel('project');
        $proj_list = $proj_model->select(array('order'=>'proj_id DESC'));
        $this->view->assign('proj_list' , $proj_list);
        $this->view();
    }

    public function funcs() {
        $proj_id = $this->uri->get(3);
        $proj_model = $this->getModel('project');
        $proj_row = $proj_model->data('proj_id', intval($proj_id))->getRow();
        $this->view->assign('proj_row' , $proj_row);
        $this->view();
    }
}
?>