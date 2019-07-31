<?php
class AdminSnippetController extends AdminController {

    private $c_type = 'snippet';

    public function index() {
        $cmodel = $this->getModel('content');
        $page = intval($this->web->req('page'));
        $page = $page==0 ? 1 : $page;
        $pageData = $cmodel->setPageNum($page)->getPageData($this->c_type);

        $codenames = array();
        foreach($this->getCodes() as $codeitem) {
            $codenames[$codeitem['cate_id']] = $codeitem['cate_name'];
        }

        $this->view->assign('rows' , $pageData['rows']);
        $this->view->assign('codenames' , $codenames);
        $this->view->assign('pager' , show_pagenums($page , $pageData['count'] , $cmodel->getPageSize() , "/admin/".$this->c_type));
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
        $this->view->assign('code_list' ,  $this->getCodes());
        $this->view->assign('row' , $row);
        $this->view();
    }

    private function getCodes() {
        $cate_model = TableModel::getInstance('category' , 'cate_id');
        return $cate_model->where(' cate_pid=15')->order('cate_id DESC')->query();
    }

}
?>