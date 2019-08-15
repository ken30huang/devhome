<?php
class InitApp {

    private static $_apps = array();
    private static $_view = NULL;
    private static $_webs = array();

    public static function initView() {
        if(!isset(self::$_apps['view'])) {
            if(!incFile(ROOT_PATH.DS.'includes'.DS.'view'.DS.'base.php')) {
                die('InitApp Error : Can not find view class');
            }

            self::$_apps['view'] = new BaseView();
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

    public static function config() {

        if(!file_exists(APP_PATH.DS.'config.php')) {
            die('InitApp Error : Can not find config file');
        }

        return require(APP_PATH.DS.'config.php');
    }
}
?>