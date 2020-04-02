<?php
class HomeDemosController extends IndexBaseController {

    public function index() {
        $cmodel = $this->getModel('demo');
        $this->assign('demo_list' , $cmodel->order('demo_id DESC')->query());
        $this->display();
    }

    

    private function _getRow() {
        $uris = $this->uri->all();
        $demo_id = end($uris);
        $demo_model = $this->getModel('demo');
        $demo_row = $demo_model->data('demo_id' , $demo_id)->getRow();
        $this->assign('row' , $demo_row);
        if($demo_row) {
            $this->assign('html' , base64_decode($demo_row['demo_html']));
            $this->assign('js' , base64_decode($demo_row['demo_js']));
            $this->assign('css' , base64_decode($demo_row['demo_css']));

            $js_links = base64_decode($demo_row['demo_jslinks']);
            $this->assign('js_links' , explode(',' , $js_links));
            $this->assign('jstype' , $demo_row['demo_jstype']);
        }
    }

    public function code() {
        if($this->session->get('user')) {
            $this->assign('issave' , true);
        }

        $env_model = TableModel::getInstance('env');
        $env_list = $env_model->order('env_id DESC')->select();
        $js = array();
        foreach($env_list as $env) {
            if($env['env_files']) {
                $data = json_decode($env['env_files'] , true);
                if(isset($data['js'])) {
                    foreach($data['js'] as $item) {
                        $fileArr = explode('/' , $item);
                        $js[] = array(
                            'val'=>end($fileArr),
                            'key'=>$item
                        );
                    }
                }
            }
        }
        $this->_getRow();
        $this->assign('jslist' , $js);
        $this->assign('issubmit' , 1);
        $this->displayView('flab/index');
    }

    public function front() {
        $this->_getRow();
        $this->displayView('flab/result');
    }
}
?>