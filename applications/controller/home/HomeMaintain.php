<?php
class HomeMaintainController extends IndexBaseController {
    
    public function lib() {
        $limit = 10;
        $where = "lib_status=1 AND (lib_cateid='0' OR lib_cateid='-1')";
        $rows = $this->getModel('lib')->where($where)->order('lib_id DESC')->range(0, $limit)->query();
        $this->assign('rows' , $rows);
        $this->display();
    }

    public function libremark() {
        $limit = 10;
        $where = "lib_status=1 AND lib_remark=1";
        $rows = $this->getModel('lib')->where($where)->order('lib_id DESC')->range(0, $limit)->query();
        $this->assign('rows' , $rows);
        $this->display();
    }

    public function libdel() {
        $this->getModel('lib')->data('lib_id' , $this->http->inputGet('lib_id'))->deleteById();
        $this->http->redirect("/home/maintain/lib");
    }
}
?>