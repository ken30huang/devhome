<?php
class IndexDemosController extends IndexBaseController {

    public function index() {
        $cmodel = $this->getModel('demo');
        $this->assign('demo_list' , $cmodel->order('demo_id DESC')->query());
        $this->display();
    }

    public function front() {
        $demo_id = $this->http->inputGet('demo_id');
        $cfmodel = $this->getModel('codefile');
        $demo_model = $this->getModel('demo');
        $libmodel = $this->getModel('lib');

        $row = $demo_model->data($this->http->inputGet())->getRow();
        $cf_list = $cfmodel->where('demo_id='.$demo_id)->order('cf_id asc')->query();
        $lib_list = array();
        if(!empty($row['demo_libs'])) {
            $lib_list = $libmodel->where('lib_id IN ('.$row['demo_libs'].')')->order('lib_id DESC')->query();
        }
        
        $css_list = array();
        $js_list = array();
        $show_map = array(
            'html'=>'',
            'css'=>'',
            'javascript'=>'',
            'jstype'=>'javascript'
        );

        foreach($lib_list as $lib_item) {
            if(!empty($lib_item['lib_css'])) {
                $css_list[] = $lib_item['lib_css'];
            }
            if(!empty($lib_item['lib_js'])) {
                $js_list[] = $lib_item['lib_js'];
            }
        }

        foreach($cf_list as $cf_item) {
            if($cf_item['cf_type'] == 'html') {
                $show_map['html'] = $cf_item['cf_code'];
                $show_map['htmlcode'] = htmlentities($cf_item['cf_code']);
            }
            if($cf_item['cf_type'] == 'css') {
                $show_map['css'] = $cf_item['cf_code'];
            }
            if($cf_item['cf_type'] == 'javascript') {
                $show_map['javascript'] = $cf_item['cf_code'];
                $show_map['jstype'] = $cf_item['cf_jstype'];
            }
        }

        $this->assign('cf_list' , $cf_list);
        $this->assign('css_list' , $css_list);
        $this->assign('js_list' , $js_list);
        $this->assign('show' , $show_map);

        $this->display();

    }
}
?>