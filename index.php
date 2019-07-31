<?php
ini_set('date.timezone','Asia/Shanghai');
require('./includes/autoload.php');
$app = new KenApp();
$app->loadWeb(array('webhome','wx') , 'webhome'); //新增web应用
$app->run();
?>