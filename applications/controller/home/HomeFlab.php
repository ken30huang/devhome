<?php
class HomeFlabController extends IndexBaseController {

    public function index() {
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
        $this->assign('jslist' , $js);
        $this->displayView('index');
    }

    public function run() {
        $this->_renderData();
        $this->displayView('result');
    }

    public function export() {
        header('Content-Type: application/octet-stream;charset=utf-8');
        header("Accept-Ranges:bytes");
        header('Content-Disposition: attachment; filename='.date('YmdHis').'.html');
        $path = APP_PATH.DS.'views'.DS.MODULE_NAME.DS.C_NAME.DS.'result.php';
        if(file_exists($path)) {
            $post = $this->http->inputPost();
            $html = '';
            $css = '';
            $js = '';
            if(!empty($post['html_content'])) {
                $html = base64_decode($post['html_content']);
            }
            if(!empty($post['css_content'])) {
                $css = base64_decode($post['css_content']);
            }
            if(!empty($post['js_content'])) {
                $js = base64_decode($post['js_content']);
            }
            require($path);
        }
    }
    
    private function _renderData() {
        $post = $this->http->inputPost();
        if($post['html_content']) {
            $this->assign('html' ,base64_decode($post['html_content'])); 
        }
        if($post['css_content']) {
            $this->assign('css' ,base64_decode($post['css_content'])); 
        }
        if($post['js_content']) {
            $this->assign('js' ,base64_decode($post['js_content'])); 
        }
        if($post['js_links']) {
            $jslinks = base64_decode($post['js_links']);
            $this->assign('js_links' , explode(',' , $jslinks)); 
        }
        if($post['js_type']) {
            $this->assign('jstype' , $post['js_type']); 
        }
    }

    public function save() {
        $post = $this->http->inputPost();
        // print_r($post);
        $tableModel = TableModel::getInstance('demo' , 'demo_id');
        $tableModel->data($post)->save();
        $this->http->success()->json();
    }
}
?>