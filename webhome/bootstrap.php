<?php
//自定义启动
incFile(APP_BASE.DS.'functions'.DS.'home_func.php');
incFile(APP_BASE.DS.'functions'.DS.'data_func.php');
incFile(APP_BASE.DS.'functions'.DS.'theme_func.php');
//执行
home_bootstrap();
?>