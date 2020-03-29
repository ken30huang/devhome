<?php
class HomeNoteController extends IndexBaseController {

    public function index() {
        $c_model = $this->getModel('content');
        $uris = $this->uri->all();
        $c_parentid = end($uris);
        
        if(is_numeric($c_parentid)) {
            $info_list =  $c_model->where("c_type='series' AND c_parentid=".$c_parentid)
                        ->order('c_order ASC,c_pubdate ASC')
                        ->query();
            $this->assign('info_list' , $info_list);
        } else {
            $where = "c_type='series' AND c_parentid!=0";
            $info_list = $c_model->where($where)->order('c_pubdate DESC')->query();
            $this->assign('info_list' , $info_list);
        }
        $dir_list = $c_model->where("c_type='series' AND c_parentid=0")->order('c_pubdate DESC')->query();
        $this->assign('dir_list' , $dir_list);
        $this->display();
    }

    public function detail() {

        $uris = $this->uri->all();
        $c_model = $this->getModel('content');
        $c_id = intval(end($uris));
        $series_list = array();
        if($c_id > 0) {
            $row = $c_model->data('c_id' , $c_id)->getRow();
            $series_list =  $c_model->where("c_type='series' AND c_parentid=".$row['c_parentid'])
                            ->order('c_order ASC,c_pubdate ASC')
                            ->query();
        }
        
        $this->assign('dir_list' , $series_list);
        $this->assign('row' , $row);
        $this->assign('parentid' , $c_parentid);
        $this->display();
    }
}
?>