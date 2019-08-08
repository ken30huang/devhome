<?php
class AdminSettingController extends AdminController {

    public function index() {
        $model = TableModel::getInstance('setting');
        $rows = $model->select();
        $row = isset($rows[0]) ? $rows[0] : NULL;
        $this->view->assign('row' , $row);
        $this->view();
    }

    public function save() {
        TableModel::getInstance('setting')->save();
        $this->http->success()->json();
    }
}
?>