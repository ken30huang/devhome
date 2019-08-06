<?php
class AdminPageController extends AdminController {

    private $c_type = 'page';

    public function index() {
        $cmodel = $this->getModel('content');
        $page = intval($this->http->inputGet('page'));
        $treeData = $cmodel->getPageTree($this->c_type);
        $this->view->assign('pagetree' , $treeData);
        $this->view();
    }

    public function save() {
        $post = $this->http->inputPost();
        if(intval($post['c_id']) == 0) {
            $post['c_pubdate'] = date('Y-m-d H:i:s');
        }
        $post['c_type'] = $this->c_type;
        $this->getModel('content')->data($post)->save();
        $this->http->success()->json();
    }

    public function del() {
        $this->getModel('content')->data('c_id' , $this->http->inputPost('del_id'))->deleteById();
        $this->http->success()->json();
    }

    public function add() {
        $cmodel = $this->getModel('content');
        $row = $cmodel->data('c_id' , $this->http->inputGet('c_id'))->getRow();
        $parents = $cmodel->getParentNodes();
        $this->view->assign('row' , $row);
        $this->view->assign('parents' , $parents);
        $this->view();
    }

}
?>