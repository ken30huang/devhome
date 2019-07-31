<?php
class WebUri {

    private static $_instance = null;
    private $_uris = array();

    public function __construct() {
        $request_uri = $_SERVER['REQUEST_URI'];
        $uri_alls = explode('?' , $request_uri);
        $uri_arr = explode('/', $uri_alls[0]);
        array_shift($uri_arr);
        if(isset($uri_alls[1])) {
            $queryString = $uri_alls[1];
            $queryStringAll = explode('&' , $queryString);
            foreach($queryStringAll as $qstr) {
                $qarr = explode('=' , $qstr);
                $_GET[$qarr[0]] = $qarr[1];
            }
        }
        $this->_uris = $uri_arr;
    }

    public static function getInstance() {
        
        if(!self::$_instance) {
            self::$_instance = new _instance();
        }

        return self::$_instance;
    }

    public function get($index) {
        return isset($this->_uris[$index])?$this->_uris[$index]:'';
    }
}
?>