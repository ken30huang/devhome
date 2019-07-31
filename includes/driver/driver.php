<?php
class Driver {

    private static $_drivers = array();

    public static function get($name) {
        
        if(isset(self::$_drivers[$name])) {

            $path = dirname(__FILE__).DS.$name.'.php';
            if(!file_exists($path)) {
                die('Can not find '.$name.' driver');
            }

            $driver_name = strtoupper($name).'Driver';
            if(!class_exists($driver_name)) {
                die('Can not find '.$name.' driver class');
            }

            self::$_drivers[$name] = new $driver_name;
        }

        return self::$_drivers[$name]; 

    }
}
?>