<?php
//web专属的运行器
class WebRunner {

    private $_preErro = 'Web Run Error: ';

    //初始化相关应用
    public function init() {
        
		//初始化uri,解析链接
		$uri = InitApp::getWeb('uri');
		//确定应用路径
        $first = $uri->get(0);
        $c_name = 'index';
        $a_name = 'index';
        //判断是app路径 , /mall/web
        if(is_dir(ROOT_PATH.DS.$first)) {
            //查找第二部分
            $dir = $uri->get(1);
            if(empty($dir)) {
                //空-访问前台首页，非admin-访问前台
                define('APP_DIR' , 'index');
            } else {
                define('APP_DIR' , $dir);
            }
            
            $c_name = $uri->get(2)?$uri->get(2):'index';
            $a_name = $uri->get(3)?$uri->get(3):'index';
        } else {
            $c_name = $uri->get(1)?$uri->get(1):'index';
            $a_name = $uri->get(2)?$uri->get(2):'index';
            if($first == 'admin') {
                define('APP_DIR' , 'admin');
            } else {
                define('APP_DIR' , 'index');
            }
        }

        define('C_NAME' , $c_name);
        define('A_NAME' , $a_name);
        //设置应用配置
        InitApp::config('app' , APP_BASE.DS.'config.php');

        return $this;
    }

    //执行
    public function execute() {

        //读取配置
        $config = InitApp::config('app');
        //初始化数据库
        if(!isset($config['db'])) {
            die($this->_preErro.'Can not find DB config');
        }
        Driver::load('pdo' , $config['db']);
        //加入模型父类
        incFile(ROOT_PATH.DS.'includes'.DS.'model'.DS.'MysqlModel.php');
        incFile(ROOT_PATH.DS.'includes'.DS.'model'.DS.'TableModel.php');

        //初始化视图
        define('V_PATH' , APP_BASE.DS.'views'.DS.APP_DIR);
        define('THEME_PATH' , APP_BASE.DS.'layouts'.DS.APP_DIR);
        $config_theme = array();
        if(isset($config['theme'][APP_DIR])) {
            $config_theme = $config['theme'][APP_DIR];
        }
        InitApp::initView($config_theme);
        
        //路由分发
        $uri_mode =  1; //默认mvc模式
        if(isset($config['uri_mode'])) {
            //配置了路由模式
            if(isset($config['uri_mode'][APP_DIR])) {
                //找到了指定的路由模式
                $uri_mode = intval($config['uri_mode'][APP_DIR]);
            } 
        }
        if($uri_mode == 1) {
            //mvc模式
            //加入控制器父类
            incFile(ROOT_PATH.DS.'includes'.DS.'controller'.DS.'WebController.php');
            //加载应用控制器基类
            incFile(APP_BASE.DS.'controller'.DS.APP_DIR.DS.'Base.php');

            $load_path = APP_BASE.DS.'controller'.DS.APP_DIR.DS.ucfirst(APP_DIR).ucfirst(C_NAME).'.php';
            if(!incFile($load_path)) {
                //找不到具体的控制
                echo $load_path;
                die($this->_preErro.'Can not find controller path');
            }
            $ctrl_name = ucfirst(APP_DIR).ucfirst(C_NAME).'Controller';
            if(!class_exists($ctrl_name)) {
                //找不到具体的控制类
                die($this->_preErro.'Can not find controller class');
            }
            $ctrl_obj = new $ctrl_name;
            $ctrl_action = A_NAME;
            if(!method_exists($ctrl_obj , $ctrl_action)) {
                die($this->_preErro.'Can not find controller method function');
            }

            $ctrl_obj->$ctrl_action();

        } else if($uri_mode == 2) {
            //自定义
            incFile(APP_BASE.DS.'bootstrap.php');
        }
        
    }

}
?>