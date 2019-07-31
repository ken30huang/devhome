<?php
define('DS' , DIRECTORY_SEPARATOR);
define('ROOT_PATH' , dirname(dirname(__FILE__)));
define('__STATIC__' , '/static/');
require(ROOT_PATH.DS.'includes'.DS.'kenapp.php');
require(ROOT_PATH.DS.'includes'.DS.'functions.php');
require(ROOT_PATH.DS.'includes'.DS.'controller'.DS.'WebController.php');
require(ROOT_PATH.DS.'includes'.DS.'driver'.DS.'pdo.php');
require(ROOT_PATH.DS.'includes'.DS.'model'.DS.'MysqlModel.php');
require(ROOT_PATH.DS.'includes'.DS.'model'.DS.'TableModel.php');
require(ROOT_PATH.DS.'includes'.DS.'web'.DS.'http.php');
require(ROOT_PATH.DS.'includes'.DS.'web'.DS.'session.php');
require(ROOT_PATH.DS.'includes'.DS.'web'.DS.'uri.php');
require(ROOT_PATH.DS.'includes'.DS.'view'.DS.'BaseView.php');
?>