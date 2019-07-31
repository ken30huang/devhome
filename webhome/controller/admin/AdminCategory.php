<?php
class AdminCategoryController extends AdminController {

    public function index() {

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
        $table->save();
        $this->getJSON();
    }

    public function del() {
        $this->web->setReq('cate_id' , $this->web->reqPost('del_id'));
        $table = TableModel::getInstance('category' , 'cate_id');
        $table->deleteById();
        $this->getJSON();
    }

    public function info() {
        $this->web->setReq('cate_id' , $this->web->reqPost('edit_id'));
        $table = TableModel::getInstance('category' , 'cate_id');
        $row = $table->getRow();
        $this->setResult('row' , $row)->getJSON();
    }

}
?>