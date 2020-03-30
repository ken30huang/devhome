<?php
//所有试图类的
class BaseView {

    private $_blocks = array();
    private $_vals = array();
    private $_theme = '';
    private $_vpath = '';
    private $_vfile = '';

    public function setTheme($theme_path , $vfile="template") {
        if(!file_exists($theme_path)) {
            die('View Error: Can not find theme file.');
        }
        $this->_theme = $theme_path;
        $this->_vfile = $vfile;
    }

    public function setViewPath($view_path) {
        if(!is_dir($view_path)) {
            die('View Error: Can not find view path.');
        }
        $this->_vpath = $view_path;
    }

    //初始化试图类
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

    public function setBlockCont($block_name) {
        $this->_checkThemePath();
        $block_cont = '';
        ob_start();
        extract($this->_vals);
        require($this->_theme.DS.$block_name.'.php');
        $block_cont = ob_get_contents();
        ob_clean();
        $this->_vals[$block_name] = $block_cont;
    }

    public function display($filename) {
        $this->_checkViewPath();
        $main_cont = '';
        ob_start();
        extract($this->_vals);
        require($this->_vpath.DS.$filename.'.php');
        $main_cont = ob_get_contents();
        ob_clean();
        $this->_vals['main'] = $main_cont;
        return $this->_renderAll();
    }

    private function _renderAll() {
        $all_cont = '';
        ob_start();
        extract($this->_vals);
        require($this->_theme.DS.$this->_vfile.'.php');
        $all_cont = ob_get_contents();
        ob_clean();
        return $all_cont;
    }

    public function show($name , $v_path='') {
        $all_cont = '';
        $real_path = [];
        $paths = explode('/', $name);
        foreach($paths as $path) {
            if(!empty($path)) {
                $real_path[] = $path;
            }
        }
        $show_path = empty($v_path) ? $this->_vpath:$v_path;
        $show_file = $show_path.DS.implode(DS, $real_path).'.php';
        if(!file_exists($show_file)) {
            die('View Error: Can not find show file.');
        }
        ob_start();
        extract($this->_vals);
        require($show_file);
        $all_cont = ob_get_contents();
        ob_clean();
        echo $all_cont;
    }

    private function _checkThemePath() {
        if(empty($this->_theme)) {
            die('View Error: Can not find theme path.');
        }
    }

    private function _checkViewPath() {
        if(empty($this->_vpath)) {
            die('View Error: Can not find view path.1111');
        }
    }
}
?>