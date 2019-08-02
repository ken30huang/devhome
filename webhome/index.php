<?php
define('APP_BASE',dirname(__FILE__));
require(dirname(dirname(__FILE__)).'/includes/autoload.php');
$app = new AppStart();
$app->initApp('web')->execute();
?>