<?php
abstract class BaseController {

    protected $result = array();
    protected $models = array();
    protected $routers = array();
    protected $view = NULL;

    public function init($routers) {
        $this->routers = $routers;
        $this->view = new View();
        $this->web = new Web();
        $this->web->initSession();
    }

    public function index() {
        echo 'Controller default method';
    }

    protected function setResult($key , $value) {
        $this->result[$key] = $value;
        return $this;
    }

    public function success($msg='请求成功' , $code='000') {
        $this->result['code'] = $code;
        $this->result['msg'] = $msg;
        return $this;
    }

    public function fail($msg='请求处理失败' , $code='001') {
        $this->result['code'] = $code;
        $this->result['msg'] = $msg;
        return $this;
    }

    public function getJSON() {
        if(!isset($this->result['code'])) {
            //默认情况下返回请求成功
            $this->success();
        }
        echo json_encode($this->result);
        exit();
    }

    protected function getModel($mName) {
        if(isset($this->models[$mName])) {
            return $this->models[$mName];
        }
        $modelName = $mName.'Model';
        incFile(M_PATH.DS.$modelName.'.php');
        $modelClass = new $modelName;
        $this->models[$mName] = $modelClass;
        return $modelClass;
    }

    public function view($name='main') {
        echo $this->view->display($this->routers);
    }

}
?>