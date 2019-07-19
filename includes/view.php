<?php
class View {

    private $_blocks = array();
    private $_config = array();
    private $_vals = array();

    public function __construct() {
        $config = get_config_setting();
        $this->_config = $config['theme'][MODULE];
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

    public function display($routers) {
        $main_cont = '';
        ob_start();
        extract($this->_vals);
        require(V_PATH.DS.$routers['controller'].DS.$routers['action'].'.php');
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
}
?>