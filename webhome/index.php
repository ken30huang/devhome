<?php
define('APP_BASE',dirname(__FILE__));
require(dirname(dirname(__FILE__)).'/includes/autoload.php');
require(dirname(__FILE__).'/common/func.php');
$app = new AppStart();
$app->initApp('web')->execute();
?>