<?php
$config = array();

$config['db']['dbtype'] = 'mysql';
$config['db']['host'] = 'localhost';
$config['db']['user'] = 'root';
$config['db']['pwd'] = '123456';
$config['db']['dbname'] = 'db_kenhome';
$config['db']['prex'] = 'dh_';

$config['theme']['index']['layouts'] = 'index.php';
$config['theme']['index']['blocks']['header'] = 'header.php';
$config['theme']['index']['blocks']['footer'] = 'footer.php';

$config['theme']['admin']['layouts'] = 'admin.php';
$config['theme']['admin']['blocks']['header'] = 'header.php';
$config['theme']['admin']['blocks']['slider'] = 'slider.php';

return $config;
?>