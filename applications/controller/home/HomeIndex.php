<?php
class HomeIndexController extends IndexBaseController {

    public function index() {
        $contentModel = $this->getModel('content');
        $wikis = $contentModel->where("c_type='knowledge'")->order('c_id DESC')->query();
        $lib_cates = $this->getModel('category')->getChilds(33);
        $this->assign('lib_cates' , $lib_cates);
        $this->assign('wiki_row' , $wikis[0]);
        $this->display();
    }
}
?>