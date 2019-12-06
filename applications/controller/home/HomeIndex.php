<?php
class HomeIndexController extends IndexBaseController {

    public function index() {
        $lib_cates = $this->getModel('category')->getChilds(33);
        $this->assign('lib_cates' , $lib_cates);
        $this->display();
    }
}
?>