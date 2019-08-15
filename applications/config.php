<?php
$config = array();

$config['drivers']['db']['config']['dbtype'] = 'mysql';
$config['drivers']['db']['config']['host'] = 'localhost';
$config['drivers']['db']['config']['user'] = 'root';
$config['drivers']['db']['config']['pwd'] = '123';
$config['drivers']['db']['config']['dbname'] = 'db_devhome';
$config['drivers']['db']['config']['prex'] = 'dh_';

$config['theme']['admin']['layouts'] = 'admin.php';
$config['theme']['admin']['blocks'] = array('nav' , 'footer' , 'slider');

$config['modules']['default'] = 'home';

return $config;
?>