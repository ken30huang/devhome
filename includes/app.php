<?php
//启动
class App {
	
    private static $_preErro = 'Web Run Error: ';
    private static $_config = NULL;

    //初始化相关应用
    private static function init() {

        //导入应用相关的公用函数库
        incFile(APP_PATH.DS.'functions'.DS.'default.php');

        //读取配置
        self::$_config = InitApp::config();

		//初始化uri,解析链接，确定加载模块
        $uri = InitApp::getWeb('uri');
        $module_name = $uri->get(0);
        if(empty($module_name)) {
            //加载默认模块
            $module_name = self::$_config['modules']['default'];
            define('C_NAME' , 'index');
            define('A_NAME' , 'index');
        } else {
            define('C_NAME' , !empty($uri->get(1))?$uri->get(1):'index');
            define('A_NAME' , !empty($uri->get(2))?$uri->get(2):'index');
        }
        define('MODULE_NAME' , $module_name);

        //追加项目配置
        $module_config = APP_PATH.DS.'config'.DS.$module_name.'.php';
        if(file_exists($module_config)) {
            $module_config_arr = require($module_config);
            self::$_config = array_merge(self::$_config , $module_config_arr);
        }

        //初始化驱动
        Driver::fetch(self::$_config['drivers']);

        //定义控制器视图目录
        define('CTRL_PATH' , APP_PATH.DS.'controller');
        define('THEME_PATH' , APP_PATH.DS.'layouts'.DS.$module_name);
        define('V_PATH' , APP_PATH.DS.'views'.DS.$module_name.DS.C_NAME);
        //加入模型父类
        incFile(ROOT_PATH.DS.'includes'.DS.'model'.DS.'DbModel.php');
        incFile(ROOT_PATH.DS.'includes'.DS.'model'.DS.'TableModel.php');
        //初始化视图
        InitApp::initView();
    }

    //执行
    public static function run() {

        self::init();
        
        //加入控制器父类
        incFile(ROOT_PATH.DS.'includes'.DS.'controller'.DS.'WebController.php');
        //加载应用控制器基类
        incFile(CTRL_PATH.DS.MODULE_NAME.DS.'Base.php');

        $load_path = CTRL_PATH.DS.MODULE_NAME.DS.ucfirst(MODULE_NAME).ucfirst(C_NAME).'.php';
        if(!incFile($load_path)) {
            //找不到具体的控制
            die(self::$_preErro.'Can not find controller path');
        }
        $ctrl_name = ucfirst(MODULE_NAME).ucfirst(C_NAME).'Controller';
        if(!class_exists($ctrl_name)) {
            //找不到具体的控制类
            die(self::$_preErro.'Can not find controller class ['.$ctrl_name.']');
        }
        $ctrl_obj = new $ctrl_name;
        $ctrl_action = A_NAME;
        if(!method_exists($ctrl_obj , $ctrl_action)) {
            die(self::$_preErro.'Can not find controller method function');
        }

        $ctrl_obj->$ctrl_action();
        
    }
}
?>