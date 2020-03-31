<?php
class HomeDemosController extends IndexBaseController {

    public function index() {
        $cmodel = $this->getModel('demo');
        $this->assign('demo_list' , $cmodel->order('demo_id DESC')->query());
        $this->display();
    }

    public function front() {
        $demo_id = $this->http->inputGet('demo_id');
        $cmodel = $this->getModel('demo');
        $row = $cmodel->data('demo_id' , $demo_id)->getRow();
        $this->assign('row' , $row);
        $this->display('flab');
    }
}
?>