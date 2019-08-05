<?php

function show_date($time) {
	return date('Y-m-d H:s' , $time);
}

function inc($filename , $data=array()) {
    if(!file_exists($filename)) {
        die('Can not find ' . $filename);
    }

    extract($data);
    require($filename);
}

function show_pagenums($page , $total , $pageSize, $url) {
    $pageTotal = ceil($total/$pageSize);
    if($pageTotal < 1) {
        $pageTotal = 1;
    }
    $html = array();
    $offset = 2;
    $start = $page-$offset;
    if($start < 1) {
        $start = 1;
    }
    $end = $start+$offset*2;
    if($end > $pageTotal) {
        $end = $pageTotal;
    }
    $prev = $page-1;
    if($prev < 1) {
        $prev = 1;
    }
    $next = $page+1;
    if($next > $pageTotal) {
        $next = $pageTotal;
    }

    $urls = array();
    foreach($_GET as $getkey=>$getval) {
        if($getkey != 'page') {
            $urls[] = $getkey.'='.$getval;
        }
    }
    $pageurl = count($urls) > 0 ? '?'.implode('&', $urls).'&page=' : '?page=';
    
    $html[] = '<a href="'.$url.$pageurl.$prev.'"><</a>';
    for($i=$start;$i<=$end; $i++) {
        $html[] = '<a href="'.$url.$pageurl.$i.'" class="'.($page==$i?'cur':'').'">'.$i.'</a>';
    }
    $html[] = '<a href="'.$url.$pageurl.$next.'">></a>';

    return implode('' , $html);
}

function get_utf8_string($content) {    //  将一些字符转化成utf8格式
    $encoding = mb_detect_encoding($content, array('ASCII','UTF-8','GB2312','GBK','BIG5'));
    return  mb_convert_encoding($content, 'utf-8', $encoding);
}

function incFile($filepath , $data=array()) {
    static $files = array();
    if(!file_exists($filepath)) {
        return false;
    }
    if(!isset($files[$filepath])) {
        extract($data);
        $files[$filepath] = require($filepath);
    }

    return true;
}

function router_parse() {
    $request_uri = $_SERVER['REQUEST_URI'];
    $uri_alls = explode('?' , $request_uri);
    if(isset($uri_alls[1])) {
        $queryString = $uri_alls[1];
        $queryStringAll = explode('&' , $queryString);
        foreach($queryStringAll as $qstr) {
            $qarr = explode('=' , $qstr);
            $_GET[$qarr[0]] = $qarr[1];
        }
    }
    $uri_arr = explode('/', $uri_alls[0]);
    array_shift($uri_arr);
    return $uri_arr;
}

function router_get($key , $route=array()) {
    $val = '';
    for($i=0; $i<count($route); $i++) {
        if($route[$i] == $key && isset($route[$i+1])) {
            $val = $route[$i+1];
        }
    }
    return $val;
}

function get_config_setting() {
    $base_config = ROOT_PATH.DS.'includes'.DS.'config.php';
    $all_setting = incFile($base_config);
    if(file_exists(APP_BASE.DS.'config.php')) {
        //如果应用的自定义配置处在，合并两个
        $app_config = incFile(APP_BASE.DS.'config.php');
        if($app_config && is_array($app_config)) {
            foreach($app_config as $c_key=>$c_value) {
                $all_setting[$c_key] = $c_value;
            }
        }
    }
    return $all_setting;
}

function filterReq() {
    if (get_magic_quotes_gpc()) {  
        $_GET = stripslashes_array($_GET);  
        $_POST = stripslashes_array($_POST);
        $_REQUEST = stripslashes_array($_REQUEST);
    }
}

function stripslashes_array(&$array) {
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

function getRowVal($key , $row , $default='') {
    return isset($row[$key])?$row[$key]:$default;
}

function isRadioSel($key , $row , $val , $isdefault=false) {
    $checked = '';
    if(isset($row[$key])) {
        if($row[$key] == $val) {
            $checked = 'checked';
        }
    } else {
        if($isdefault) {
            $checked = 'checked';
        }
    }

    return $checked;
}

function getSelVal($key , $val , $row) {
    $selected = '';
    if(isset($row[$key])) {
        if($row[$key] == $val) {
            $selected = 'selected';
        }
    }

    return $selected;
}

function isCheckSel($key , $row , $val='') {
    $checked = '';
    if(isset($row[$key])) {
        if(strpos($row[$key] , $val) !== false) {
            $checked = 'checked';
        }
    }

    return $checked;
}

function handle_404() {
    incFile(ROOT_PATH.DS.'static'.DS.'tmpl'.DS.'404.php');
}

//加载应用模型
function model_load($name , $id='id') {
    static $models = array();
    if(!isset($models[$name])) {
        if(!incFile(APP_BASE.DS.'model'.DS.ucfirst($name).'Model.php')) {
            //找不到文件，使用table加载
            $models[$name] = new TableModel($name , $id);
        } else {
            $class_name = ucfirst($name).'Model';
            if(!class_exists($class_name)) {
                die('Model load error: Can not find model class');
            }
            $models[$name] = new  $class_name();
        }
    }

    return $models[$name];
}

//加载单独的模板
function theme_load($tname , $tdata=array()) {
    $block_cont = '';
    ob_start();
    extract($tdata);
    require($tname);
    $block_cont = ob_get_contents();
    ob_clean();
    return $block_cont;
}
?>