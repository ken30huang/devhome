<?php
class AdminDemoController extends AdminController {


    public function index() {
        $cmodel = $this->getModel('demo');
        $page = intval($this->http->inputGet('page'));
        $page = $page==0 ? 1 : $page;
        $pageData = $cmodel->setPageNum($page)->getPageData();
        $this->view->assign('rows' , $pageData['rows']);
        $this->view->assign('pager' , show_pagenums($page , $pageData['count'] , $cmodel->getPageSize() , "/admin/article"));
        $this->view();
    }

    public function save() {
        $post = $this->http->inputPost();
        $c_model = $this->getModel('demo');
        $c_model->data($post)->save();
        $this->http->success()->json();
    }

    public function del() {
        $table = TableModel::getInstance('demo' , 'demo_id');
        $table->data('demo_id' , $this->http->inputPost('del_id'))->deleteById();
        $this->http->success()->json();
    }

    public function add() {

        $cmodel = $this->getModel('demo');
        $libmodel = $this->getModel('lib');
        $row = $cmodel->data($this->http->inputGet())->getRow();
        $lib_list = $libmodel->order('lib_id DESC')->select();
        $lib_sel = array();
        if($row) {
            if(!empty($row['demo_libs'])) {
                $lib_sel = $libmodel->where('lib_id IN ('.$row['demo_libs'].')')->query();
            }
        }

        $this->view->assign('row' , $row);
        $this->view->assign('lib_list' , $lib_list);
        $this->view->assign('lib_sel' , $lib_sel);
        $this->view();
    }

    public function codeview() {
        $demo_id = $this->http->inputGet('demo_id');
        $cfmodel = $this->getModel('codefile');
        $cf_list = $cfmodel->where('demo_id='.$demo_id)->order('cf_id asc')->query();

        $this->view->assign('cf_list' , $cf_list);
        $this->view->assign('demo_id' , $demo_id);
        $this->view->assign('code_list' ,  $this->getModel('category')->getChilds(15));
        $this->view();
    }

    public function codeedit() {
        $cfmodel = $this->getModel('codefile');
        $row = $cfmodel->data('cf_id', $this->http->inputPost('edit_id'))->getRow();
        $this->http->res('row',$row)->success()->json();
    }

    public function codesave() {
        $post = $this->http->inputPost();
        $cfmodel = $this->getModel('codefile');
        $cfmodel->data($post)->save();
        $this->http->success()->json();
    }

    public function codedel() {
        $cfmodel = $this->getModel('codefile');
        $cfmodel->data('cf_id' , $this->http->inputPost('del_id'))->deleteById();
        $this->http->success()->json();
    }

}
?>