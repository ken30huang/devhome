<?php
class AdminCategoryController extends AdminController {

    public function index() {

        $this->checkLogin();

        $table = TableModel::getInstance('category' , 'cate_id');
        $rows = $table->select(array('order'=>'cate_id ASC'));

        $parents = array();
        $childmap = array();
        foreach($rows as $row) {
            if(intval($row['cate_pid']) == 0) {
                $parents[] = $row;
            } else {
                if(!isset($childmap[$row['cate_pid']])) {
                    $childmap[$row['cate_pid']] = array();
                }
                $childmap[$row['cate_pid']][] = $row;
            }
        }
        foreach($parents as &$pareitem) {
            $p_id = $pareitem['cate_id'];
            if(isset($childmap[$p_id])) {
                $pareitem['childs'] = $childmap[$p_id];
            } else {
                $pareitem['childs'] = array();
            }
        }
        $this->view->assign('parents' , $parents);
        $this->view();
    }

    public function save() {
        $table = TableModel::getInstance('category' , 'cate_id');
        $table->data($this->http->inputAll())->save();
        $this->http->success()->json();
    }

    public function del() {
        $table = TableModel::getInstance('category' , 'cate_id');
        $table->data('cate_id', $this->http->inputPost('del_id'))->deleteById();
        $this->http->success()->json();
    }

    public function info() {
        $table = TableModel::getInstance('category' , 'cate_id');
        $row = $table->data('cate_id', $this->http->inputPost('edit_id'))->getRow();
        $this->http->res('row',$row)->success()->json();
    }

}
?>