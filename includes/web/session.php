<?php
//web会话类
class WebSession {

    public function __construct() {
        //初始化session
        session_start();
    }

    public function get($key) {
        return isset($_SESSION[$key]) ? $_SESSION[$key]:'';
    }

    public function set($key , $obj) {
        $_SESSION[$key] = $obj;
    }

    public function del($key) {
        $_SESSION[$key] = NULL;
        unset($_SESSION[$key]);
    }
}
?>