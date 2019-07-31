<?php
//web专属的运行器
class WebRunner {

    //初始化相关应用
    public function init() {
        
        //读取应用配置
        $config_path = APP_BASE.DS.'config.php';
        if(!file_exists($config_path)) {
            die('Web Run Error: Can not find config');
        }

        $config = require($config_path);

        

    }

    //执行
    public function execute() {

    }

}
?>