<?php
$config = array();

$config['db']['dbtype'] = 'mysql';
$config['db']['host'] = 'localhost';
$config['db']['user'] = 'root';
$config['db']['pwd'] = '123';
$config['db']['dbname'] = 'db_devhome';
$config['db']['prex'] = 'dh_';

$config['theme']['index']['layouts'] = 'index.php';
$config['theme']['index']['blocks']['header'] = 'header.php';
$config['theme']['index']['blocks']['footer'] = 'footer.php';

$config['theme']['admin']['layouts'] = 'admin.php';
$config['theme']['admin']['blocks'] = array('nav' , 'footer' , 'slider');

return $config;
?>