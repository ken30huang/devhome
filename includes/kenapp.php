<?php
class KenApp {

	private $_route = array();
	private $_caches = array();
	private $_appname = 'default';

	public function __construct($app_name) {
		$this->_appname = $app_name;
		define('APP_BASE' , ROOT_PATH.DS.$app_name);
		define('__PUBLIC__' , '/'.$app_name.'/public/');
		filterReq();
		$this->_initRouter();
		$this->handle();
	}

	private function _initRouter() {
		$router_parses = router_parse();
		$module_name = $router_parses[0];
		$module_name = empty($module_name) ? 'home' : $module_name;
		define('M_PATH' , APP_BASE.DS.'model');
		if(!empty($module_name) && is_dir(APP_BASE.DS.'controller'.DS.$module_name)) {
			//第一个
			$this->_route['controller'] = isset($router_parses[1]) ? $router_parses[1] : 'index';
			$this->_route['action'] = isset($router_parses[2]) ? $router_parses[2] : 'index';
			define('C_PATH' , APP_BASE.DS.'controller'.DS.$module_name);
			define('V_PATH' , APP_BASE.DS.'views'.DS.$module_name);
			define('THEME_PATH' , APP_BASE.DS.'layouts'.DS.$module_name);
		} else {
			$this->_route['controller'] = isset($router_parses[0]) ? $router_parses[0] : 'index';
			$this->_route['action'] = isset($router_parses[1]) ? $router_parses[1] : 'index';
			define('C_PATH' , APP_BASE.DS.'controller');
			define('V_PATH' , APP_BASE.DS.'views');
			define('THEME_PATH' , APP_BASE.DS.'layouts');
		}
		
		define('MODULE' , $module_name);
		$this->_route['router_param'] = $router_parses;
	}

	protected function handle() {

		//引入应用控制器基类
		incFile(C_PATH.DS.ucfirst(MODULE).'Controller.php');
		//引入应用模型基类
		incFile(M_PATH.DS.ucfirst(MODULE).'Model.php');

		$ctrlName = $this->_route['controller'];
		$actionName = $this->_route['action'];
		$module = MODULE != 'home' ? MODULE : '';
		$ctrlClass = ucfirst($module).ucfirst($ctrlName).'Controller';
		if(incFile(C_PATH.DS.$ctrlClass.'.php')) {
			$ctrl = new $ctrlClass();
			$ctrl->init($this->_route);
			if(method_exists($ctrl , 'actionBefore')) {
				//前置执行
				if($ctrl->actionBefore() === FALSE) {
					//执行结果 == false,不再往下执行
					return;
				}
			}
			if(method_exists($ctrl , $actionName)) {
				$ctrl->$actionName();
			} else {
				die('Can not find method ['.$ctrlName.'->'.$actionName.']');
			}
			if(method_exists($ctrl , 'actionAfter')) {
				//后置执行
				$ctrl->actionAfter();
			}
			
		} else {
			handle_404();
		}

		exit;
	}
}
?>