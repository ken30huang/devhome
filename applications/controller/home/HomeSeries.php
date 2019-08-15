<?php
class HomeSeriesController extends IndexBaseController {

    public function index() {
        $series_list = $this->getModel('content')->where("c_type='series' AND c_parentid=0")->order('c_pubdate DESC')->query();
        $this->assign('series_list' , $series_list);
        $this->display();
    }

    public function detail() {

        $uris = $this->uri->all();
        $c_model = $this->getModel('content');
        $c_parentid = end($uris);
        $row = $c_model->data('c_id' , $c_parentid)->getRow();
        $series_list =  $c_model->where("c_type='series' AND c_parentid=".$c_parentid)
                        ->order('c_order ASC,c_pubdate ASC')
                        ->query();
        $c_id = intval($this->http->inputGet('c_id'));
        if($c_id > 0) {
            $row = $c_model->data('c_id' , $c_id)->getRow();
        }
        
        $this->assign('dir_list' , $series_list);
        $this->assign('row' , $row);
        $this->assign('parentid' , $c_parentid);
        $this->display();
    }
}
?>