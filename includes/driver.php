<?php
define('DRIVER_PATH' , ROOT_PATH.DS.'includes'.DS.'driver');

class Driver {

    private static $_drivers = array();

    /**
     * 加载驱动 , 一般是数据库，缓存，MQ，也可以是mail , socket
     */
    public static function load($name , $config=array()) {

        if(!isset(self::$_drivers[$name])) {
            $driver_file = DRIVER_PATH.DS.$name.'.php';
            if(!incFile($driver_file)) {
                die('Driver Load Error : Can not find driver path');
            }
            $driver_class = ucfirst($name).'Driver';
            self::$_drivers[$name] = new $driver_class($config);
        }

    }

    /**
     * 批量加载驱动
     */
    public static function fetch($drivers=array()) {
        foreach($drivers as $key=>$item) {
            self::load($key , $item['config']);
        }
    }

    /**
     * 获取驱动对象
     */
    public static function get($name) {
        if(!isset(self::$_drivers[$name])) {
            die('Driver Get Error : Can not find driver obj');
        }
        return self::$_drivers[$name];
    }
}
?>