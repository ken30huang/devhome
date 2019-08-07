<?php
class IndexSeriesController extends IndexBaseController {

    public function index() {
        $series_list = $this->getModel('content')->where("c_type='series'")->order('c_linkdate DESC')->query();
        $data_list = array();
        foreach($series_list as $series) {
            $year = date('Y' , strtotime($series['c_linkdate']));
            if(!isset($data_list[$year])) {
                $data_list[$year] = array();
            }
            $data_list[$year][] = $series;
        }
        // print_r($data_list);
        $this->assign('data_list' , $data_list);
        $this->assign('scount' , count($series_list));
        $this->display();
    }

    public function detail() {
        $uris = $this->uri->all();
        $alias = end($uris);
        echo $alias;
    }
}
?>