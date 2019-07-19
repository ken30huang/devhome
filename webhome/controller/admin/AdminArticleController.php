<?php
class AdminArticleController extends AdminController {

    private $c_type = 'article';

    public function index() {
        $pageData = $this->getModel('content')->getPageData($this->c_type);
        $this->view->assign('rows' , $pageData['rows']);
        $this->view();
    }

    public function save() {
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
        $tmodel = $this->getModel('tag');
        $row = $cmodel->getRow();
        $tagRows = $tmodel->select();

        $this->view->assign('row' , $row);
        $this->view->assign('tags' , $tagRows);
        $this->view();
    }

}
?>