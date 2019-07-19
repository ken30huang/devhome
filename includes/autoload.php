<?php
define('DS' , DIRECTORY_SEPARATOR);
define('ROOT_PATH' , dirname(dirname(__FILE__)));
define('__STATIC__' , '/static/');
require(ROOT_PATH.DS.'includes'.DS.'kenapp.php');
require(ROOT_PATH.DS.'includes'.DS.'functions.php');
require(ROOT_PATH.DS.'includes'.DS.'BaseController.php');
require(ROOT_PATH.DS.'includes'.DS.'db.php');
require(ROOT_PATH.DS.'includes'.DS.'BaseModel.php');
require(ROOT_PATH.DS.'includes'.DS.'TableModel.php');
require(ROOT_PATH.DS.'includes'.DS.'web.php');
require(ROOT_PATH.DS.'includes'.DS.'view.php');
?>