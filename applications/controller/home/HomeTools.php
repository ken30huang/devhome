<?php
class HomeToolsController extends IndexBaseController {

    public function index() {
        $this->display();
    }

    public function mind() {
        $this->display();
    }

    public function flab() {
        $libs = $this->getModel('lib')->select();
        $islogin = $this->session->get('user');
        $cate_model = $this->getModel('category');
        $links = array();
        
        foreach($libs as $lib) {
            if(!empty($lib['lib_js'])) {
                $lib['ftype'] = 'js';
                $lib['name'] = '[javascript]'.$lib['lib_name'];
                $lib['url'] = $lib['lib_js'];
                $links[] = $lib;
            }
            if(!empty($lib['lib_css'])) {
                $lib['ftype'] = 'css';
                $lib['name'] = '[css]'.$lib['lib_name'];
                $lib['url'] = $lib['lib_css'];
                $links[] = $lib;
            }
        }
        $this->assign('title' , '前端实验室');
        $this->assign('libs' , $links);
        $this->assign('islogin' , $islogin);
        $this->assign('cate_list' , $cate_model->getChilds(15));
        $this->display('normal');
    }

    public function flabview() {
        
        $data = $this->http->inputPost('pageData');
        $pageData = json_decode($data , true);
        $pageData['http'] = '';
        if(isset($pageData['export'])) {
            $pageData['http'] = 'https:';
            header('Content-Type: application/octet-stream;charset=utf-8');
            header("Accept-Ranges:bytes");
            header('Content-Disposition: attachment; filename='.date('YmdHis').'.html');
        }
        $path = APP_PATH.DS.'views'.DS.MODULE_NAME.DS.C_NAME.DS.'flabview.php';
        if(file_exists($path)) {
            require($path);
        } else {
            die('No such file : '.$path);
        }

    }
}
?>