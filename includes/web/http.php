<?php
class WebHttp {

    private $_res = array();

    private function _filterRequest() {
		if (get_magic_quotes_gpc()) {  
		    $_GET = $this->_stripslashes_array($_GET);  
		    $_POST = $this->_stripslashes_array($_POST);
		    $_REQUEST = $this->_stripslashes_array($_REQUEST);
		}
	}

	private function _stripslashes_array(&$array) {
		while(list($key,$var) = each($array)) {  
		    if ($key != 'argc' && $key != 'argv' && (strtoupper($key) != $key || ''.intval($key) == "$key")) {
			    if (is_string($var)) {  
			         $array[$key] = stripslashes($var);  
				}
				if (is_array($var))  {  
				     $array[$key] = $this->_stripslashes_array($var);  
				}
			}
		}
		return $array;
	}

	public function isAjax() {
		if(isset($_SERVER["HTTP_X_REQUESTED_WITH"])){ 
			if(strtolower($_SERVER["HTTP_X_REQUESTED_WITH"])=="xmlhttprequest") {
		    	// ajax 请求的处理方式 
				return true;
			} else {
				return true;
			}
		}else{ 
		    // 正常请求的处理方式
		    return false;
		}
	}

	public function fail($msg='请求处理失败' , $code='001') {
		$this->_res['code'] = $code;
        $this->_res['msg'] = $msg;
        return $this;
	}

	public function res($key , $val) {
		$this->_res[$key] = $val;
        return $this;
	}

	public function success($msg='请求处理成功' ) {
        $this->_res['code'] = '000';
		$this->_res['msg'] = $msg;
        return $this;
    }
    
    public function json() {
        echo json_encode($this->_res);
        exit;
    }

	public function inputGet($name = '') {
		$this->_filterRequest();
		if(empty($name)) {
			return $_GET;
		}
		if(isset($_GET[$name])) {
			return $_GET[$name];
		}

		return '';
	}

	public function inputPost($name = '' , $default='') {
		$this->_filterRequest();
		if(empty($name)) {
			return $_POST;
		}
		if(isset($_POST[$name])) {
			return $_POST[$name];
		} else {
			return $default;
		}

		return '';
	}

	public function inputAll($name = '') {
		$this->_filterRequest();
		if(empty($name)) {
			return $_REQUEST;
		}
		if(isset($_REQUEST[$name])) {
			return $_REQUEST[$name];
		}

		return '';
	}

	public function addInput($key , $value , $type='all') {
		if($type == 'all') {
			$_REQUEST[$key] = $value;
		} else if($type == 'post') {
			$_POST[$key] = $value;
		} else if($type == 'get') {
			$_GET[$key] = $value;
		}
	}

	public function getIP() {
		return $_SERVER['REMOTE_ADDR'];
	}

	public function redirect($url) {
		echo '<meta charset="utf-8" /><script>location.href="'.$url.'";</script>';
	}

	public function isGet() {
		return $_SERVER['REQUEST_METHOD'] == 'GET' ? true : false;
	}

	public function isPost() {
		return $_SERVER['REQUEST_METHOD'] == 'POST' ? true : false;
	}
}
?>