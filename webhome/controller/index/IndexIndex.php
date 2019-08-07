<?php
class IndexIndexController extends IndexBaseController {

    public function index() {

        $c_model = $this->getModel('content');
        $blog_list = $c_model->getLast('article' , 5);
        $series_list = $c_model->where("c_type='series'")->order('c_linkdate DESC')->range(0 , 5)->query();
        
        $this->assign('blog_list' , $blog_list);
        $this->assign('series_list' , $series_list);   
        $this->display();
    }
}
?>