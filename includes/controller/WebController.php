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
        $modelName = ucfirst($mName).'Model';
        $model_path = APP_PATH.DS.'model';
        if(!incFile($model_path.DS.$modelName.'.php')) {
            //在公用目录找不到，就去模块私有的目录查找
            $model_path = APP_PATH.DS.'model'.DS.MODULE_NAME;
            if(!incFile($model_path.DS.$modelName.'.php')) {
                die('Web controller error : Can not find model file');
            }
        }
        if(!class_exists($modelName)) {
            die('Web controller error : Can not find model class');
        }
        $this->models[$mName] = new $modelName;
        return $this->models[$mName];
    }

    public function view($name='main') {
        $config = InitApp::config();
        $this->view->setTheme(THEME_PATH);
        $this->view->setViewPath(V_PATH);
        if(isset($config['theme'][MODULE_NAME]['blocks'])) {
            $blocks = $config['theme'][MODULE_NAME]['blocks'];
            foreach($blocks as $block_name) {
                $this->view->setBlockCont($block_name);
            }
        }
        
        echo $this->view->display(A_NAME);
    }

    protected function assign($key , $val) {
        $this->view->assign($key , $val);
    }

    public function emptyPage() {
        echo "Page not found.";
    }

}
?>