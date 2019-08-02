<?php
abstract class WebController {

    protected $result = array();
    protected $models = array();
    protected $view = NULL;
    protected $http = NULL;
    protected $session = NULL;
    protected $uri = NULL;

    public function __construct() {
        $this->view = InitApp::get('view');
        $this->session = InitApp::getWeb('session');
        $this->http = InitApp::getWeb('http');
        $this->uri = InitApp::getWeb('uri');
    }

    public function index() {
        echo 'Controller default method';
    }

    protected function getModel($mName) {
        if(isset($this->models[$mName])) {
            return $this->models[$mName];
        }
        $modelName = $mName.'Model';
        incFile(APP_BASE.DS.'model'.DS.$modelName.'.php');
        $this->models[$mName] = new $modelName;
        return $this->models[$mName];
    }

    public function view($name='main') {
        echo $this->view->display();
    }

}
?>