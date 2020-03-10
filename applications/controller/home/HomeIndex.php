<?php
class HomeIndexController extends IndexBaseController {

    public function index() {
        $contentModel = $this->getModel('content');
        $articles = $contentModel->where("(c_type='article' OR c_type='knowledge')")->order('c_id DESC')->range(0,10)->query();
        $lib_cates = $this->getModel('category')->getChilds(33);
        $this->assign('lib_cates' , $lib_cates);
        $this->assign('articles' , $articles);
        $this->display();
    }
}
?>