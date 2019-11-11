<?php
class AdminVisitlogController extends AdminController {


    public function index() {
        $model = TableModel::getInstance('visitlog' , 'v_id');
        $count = $model->getCount('');
        $pageNo = intval($this->http->inputGet('page'));
        $pageNo = ($pageNo <= 0 ? 1 : $pageNo);
        $pagesize = 15;
        $start = intval($pageNo-1)*$pagesize-1;
        $start = $start < 0 ? 0 : $start;
        $rows = $model->select(array('order'=>'v_logtime DESC , v_id DESC' , 'limit'=>$start.','.$pagesize));

        $this->view->assign('rows' , $rows);
        $this->view->assign('pager' , show_pagenums($pageNo , $count , $pagesize , "/admin/visitlog"));
        $this->view();
    }

}
?>