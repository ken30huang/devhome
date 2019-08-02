<?php
//所有试图类的
class BaseView {

    private $_blocks = array();
    private $_config = array();
    private $_vals = array();

    //初始化试图类
    public function __construct($config) {
        $this->_config = $config;
        if(isset($this->_config['blocks'])) {
            foreach($this->_config['blocks'] as $block) {
                $this->getBlockCont($block);
            }
        }
    }

    public function assign($key , $val) {
        $this->_vals[$key] = $val;
    }

    public function setBlock($key , $val) {
        $this->_blocks[$key] = $val;
    }

	public function addScript($script) {
		$this->_vals['jslinks'][] = '<script src="'.$script.'?t='.time().'"></script>';
	}

	public function addStyle($style) {
		$this->_vals['csslinks'][] = '<link href="'.$style.'?t='.time().'" rel="stylesheet" />';
	}

    private function getBlockCont($block_name) {
        $block_cont = '';
        ob_start();
        extract($this->_vals);
        require(THEME_PATH.DS.$block_name.'.php');
        $block_cont = ob_get_contents();
        ob_clean();
        $this->_vals[$block_name] = $block_cont;
    }

    public function display() {
        $main_cont = '';
        ob_start();
        extract($this->_vals);
        require(V_PATH.DS.C_NAME.DS.A_NAME.'.php');
        $main_cont = ob_get_contents();
        ob_clean();
        $this->_vals['main'] = $main_cont;
        return $this->_renderAll();
    }

    private function _renderAll() {
        $all_cont = '';
        ob_start();
        extract($this->_vals);
        require(THEME_PATH.DS.'template.php');
        $all_cont = ob_get_contents();
        ob_clean();
        return $all_cont;
    }

    public function show($name) {
        $all_cont = '';
        $real_path = [];
        $paths = explode('/', $name);
        foreach($paths as $path) {
            if(!empty($path)) {
                $real_path[] = $path;
            }
        }
        ob_start();
        extract($this->_vals);
        require(V_PATH.DS.implode(DS, $real_path).'.php');
        $all_cont = ob_get_contents();
        ob_clean();
        echo $all_cont;
    }
}
?>