<?php
//启动
class AppStart {
	
	public function initApp($runtype) {
		incFile(ROOT_PATH.DS.'includes'.DS.'runner'.DS.$runtype.'.php');
		$className = ucfirst($runtype).'Runner';
		if(!class_exists($className)) {
			die('Can not find run class');
		}
		$runObj = new $className;
		$runObj->init();
		return $runObj;
	}
}
?>