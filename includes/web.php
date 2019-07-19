<?php
class Web {

	public function initSession() {
		session_start();
	}

	public function setSession($name , $value) {
		$_SESSION[$name] = $value;
	}
	public function getSession($name) {

		if(isset($_SESSION[$name])) {
			return $_SESSION[$name];
		} else {
			return NULL;
		}
	}

	public function clearSession() {
		session_destroy();
	}

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

	public function failResp($msg='请求处理失败' , $code='001') {

		$array = array();
		$array['code'] = $code;
		$array['msg'] = $msg;

		return $array;
	}

	public function successResp($data=array() , $msg='请求处理成功' ) {

		$array = array();
		$array['code'] = '000';
		$array['data'] = $data;

		return $array;
	}

	public function reqGet($name) {
		$this->_filterRequest();
		if(isset($_GET[$name])) {
			return $_GET[$name];
		}

		return '';
	}

	public function reqPost($name , $default='') {
		$this->_filterRequest();
		if(isset($_POST[$name])) {
			return $_POST[$name];
		} else {
			return $default;
		}

		return '';
	}

	public function req($name) {
		$this->_filterRequest();
		if(isset($_REQUEST[$name])) {
			return $_REQUEST[$name];
		}

		return '';
	}

	public function setReq($key , $value , $type='request') {
		if($type == 'request') {
			$_REQUEST[$key] = $value;
		} else if($type == 'post') {
			$_POST[$key] = $value;
		} else if($type == 'get') {
			$_GET[$key] = $value;
		}
	}

	public function upload($name , $path) {
		$result = array();
		$result['code'] = 0;
		$result['message'] = 'ok';

		if (!is_uploaded_file($_FILES[$name]['tmp_name'])) {
			$result['code'] = 1; //非法文件
			$result['message'] = '非法文件';
		} else {
			$names = explode('.' , $_FILES[$name]['name']);
			$filename = date('Ymd_His').'.'.$names[count($names)-1];
			$uploadfile = $path.DS.$filename;
			if(!move_uploaded_file($_FILES[$name]['tmp_name'], $uploadfile)) {
				$result['code'] = 2; //上传失败
				$result['message'] = '上传失败';
			} else {
				$result['filename'] = $filename;
			}
		}

		return $result;
	}

	public function getIP() {
		return $_SERVER['REMOTE_ADDR'];
	}

}
?>