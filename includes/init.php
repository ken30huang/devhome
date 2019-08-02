<?php
class InitApp {

    private static $_apps = array();
    private static $_view = NULL;
    private static $_configs = array();
    private static $_webs = array();

    public static function initView($config) {
        if(!isset(self::$_apps['view'])) {
            if(!incFile(ROOT_PATH.DS.'includes'.DS.'view'.DS.'base.php')) {
                die('InitApp Error : Can not find view class');
            }

            self::$_apps['view'] = new BaseView($config);
        }
    }

    public static function getWeb($name) {
        if(!isset(self::$_webs[$name])) {
            if(!incFile(ROOT_PATH.DS.'includes'.DS.'web'.DS.$name.'.php')) {
                die('InitApp Error : Can not find web class');
            }

            $className = 'Web'.ucfirst($name);
            self::$_webs[$name] = new $className();
        }

        return self::$_webs[$name];
    }

    public static function get($name) {
        if(!isset(self::$_apps[$name])) {
            die('InitApp Error : Can not find get class');
        }
        return self::$_apps[$name];
    }

    public static function config($name , $config_path='') {
        if(empty($config_path)) {
            //没有路径，获取配置
            if(!isset(self::$_configs[$name])) {
                return array();
            } else {
                return self::$_configs[$name];
            }
        } else {
            if(!file_exists($config_path)) {
                die($this->_preErro.'Can not find config');
            }
            self::$_configs[$name] = require($config_path);
        }
        
    }
}
?>