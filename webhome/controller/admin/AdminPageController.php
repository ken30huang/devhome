<?php
class AdminPageController extends AdminController {

    private $c_type = 'page';

    public function index() {
        $cmodel = $this->getModel('content');
        $page = intval($this->web->req('page'));
        $treeData = $cmodel->getPageTree($this->c_type);
        $this->view->assign('pagetree' , $treeData);
        $this->view();
    }

    public function save() {
        if(intval($this->web->req('c_id')) == 0) {
            $this->web->setReq('c_pubdate' , date('Y-m-d H:i:s'));
        }
        $this->web->setReq('c_type' , $this->c_type);
        $this->getModel('content')->save();
        $this->getJSON();
    }

    public function del() {
        $this->web->setReq('c_id' , $this->web->reqPost('del_id'));
        $table = TableModel::getInstance('content' , 'c_id');
        $table->deleteById();
        $this->getJSON();
    }

    public function add() {
        $cmodel = $this->getModel('content');
        $row = $cmodel->getRow();
        $parents = $cmodel->getParentNodes();
        $this->view->assign('row' , $row);
        $this->view->assign('parents' , $parents);
        $this->view();
    }

}
?>