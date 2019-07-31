<?php
$config = array();

$config['db']['dbtype'] = 'mysql';
$config['db']['host'] = 'localhost';
$config['db']['user'] = 'root';
$config['db']['pwd'] = '123';
$config['db']['dbname'] = 'db_devhome';
$config['db']['prex'] = 'dh_';

$config['theme']['admin']['layouts'] = 'admin.php';
$config['theme']['admin']['blocks'] = array('nav' , 'footer' , 'slider');

$config['run_mode']['admin'] = 1; //以mvc模式运行
$config['run_mode']['index'] = 2; //以函数式运行

//需要载入的模型父类
$config['base']['models'] = array('mysql');

return $config;
?>