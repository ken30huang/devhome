<?php
class IndexIndexController extends IndexBaseController {

    public function index() {

        $demo_model = $this->getModel('demo');
        $c_model = $this->getModel('content');
        $series_list = $c_model->where("c_type='series' AND c_parentid=0")->order('c_linkdate DESC')->range(0 , 5)->query();

        $this->assign('demo_list' , $demo_model->order('demo_id DESC')->range(0 , 4)->query());
        $this->assign('blog_list' , $c_model->getLast('article' , 5));
        $this->assign('know_list' , $c_model->getLast('knowledge' , 10));
        $this->assign('series_list' , $series_list);   
        $this->display();
    }
}
?>