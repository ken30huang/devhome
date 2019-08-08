<?php
class AdminSnippetController extends AdminController {

    private $c_type = 'snippet';

    public function index() {
        $cmodel = $this->getModel('content');
        $category_model = $this->getModel('category');
        $page = intval($this->http->inputGet('page'));
        $page = $page==0 ? 1 : $page;
        $pageData = $cmodel->setPageNum($page)->getPageData($this->c_type);

        $codenames = array();
        foreach($category_model->getChilds(15) as $codeitem) {
            $codenames[$codeitem['cate_id']] = $codeitem['cate_name'];
        }

        $this->view->assign('rows' , $pageData['rows']);
        $this->view->assign('codenames' , $codenames);
        $this->view->assign('pager' , show_pagenums($page , $pageData['count'] , $cmodel->getPageSize() , "/admin/".$this->c_type));
        $this->view();
    }

    public function save() {
        if(intval($this->http->inputGet('c_id')) == 0) {
            $this->web->setReq('c_pubdate' , date('Y-m-d H:i:s'));
        }
        $this->web->setReq('c_type' , $this->c_type);
        $this->getModel('content')->save();
        $this->http->success()->json();
    }

    public function del() {
        $this->web->setReq('c_id' , $this->http->inputPost('del_id'));
        $this->getModel('content')->deleteById();
        $this->http->success()->json();
    }

    public function add() {

        $cmodel = $this->getModel('content');
        $row = $cmodel->data('c_id' , $this->http->inputGet('c_id'))->getRow();
        $this->view->assign('code_list' ,  $this->getModel('category')->getChilds(15));
        $this->view->assign('row' , $row);
        $this->view();
    }

}
?>