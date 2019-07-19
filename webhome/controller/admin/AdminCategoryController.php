<?php
class AdminCategoryController extends AdminController {

    public function index() {

        $table = TableModel::getInstance('category' , 'cate_id');
        $rows = $table->select(array('order'=>'cate_id ASC'));
        $this->view->assign('rows' , $rows);

        $parents = array();
        foreach($rows as $row) {
            if(intval($row['cate_pid']) == 0) {
                $parents[] = $row;
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