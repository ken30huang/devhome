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
        $this->display('normal');
    }

    public function flabview() {
        
        $data = $this->http->inputPost('pageData');
        $path = APP_PATH.DS.'views'.DS.MODULE_NAME.DS.C_NAME.DS.'flabview.php';
        if(file_exists($path)) {
            $pageData = json_decode($data , true);
            require($path);
        } else {
            die('No such file : '.$path);
        }

    }
}
?>