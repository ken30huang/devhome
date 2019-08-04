<?php
$config = array();

$config['db']['dbtype'] = 'mysql';
$config['db']['host'] = 'localhost';
$config['db']['user'] = 'root';
$config['db']['pwd'] = '123456';
$config['db']['dbname'] = 'db_devhome';
$config['db']['prex'] = 'dh_';

$config['theme']['admin']['layouts'] = 'admin.php';
$config['theme']['admin']['blocks'] = array('nav' , 'footer' , 'slider');

$config['uri_mode']['admin'] = 1; //以mvc模式运行
$config['uri_mode']['index'] = 2; //以自定义方式运行


return $config;
?>