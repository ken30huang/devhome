<?php
ini_set('date.timezone','Asia/Shanghai');
define('DS' , DIRECTORY_SEPARATOR);
define('ROOT_PATH' , dirname(dirname(__FILE__)));
define('APP_PATH' , ROOT_PATH.DS.'applications');
define('INC_PATH' , ROOT_PATH.DS.'includes');
define('__STATIC__' , '/static/');
require(INC_PATH.DS.'functions'.DS.'comm_func.php');
require(INC_PATH.DS.'driver.php');
require(INC_PATH.DS.'init.php');
require(INC_PATH.DS.'app.php');
?>