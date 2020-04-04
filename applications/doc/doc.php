<?php
function doc_run() {

    $url = str_replace('/doc/','', $_SERVER['REQUEST_URI']);
    // echo $url;
    if(!$url) {
        $setting_data = get_setting();
        require(THEME_PATH.DS.'template.php');
    } else {
        header("Content-type:text/html;charset=utf-8");
        $content = doc_content($url);
        // var_dump($content);
        if(empty($content)) {
            echo "Page is Build....";
            exit;
        }
        echo $content;
        // exit;
    }
    
}

function get_setting() {
    static $setting_data = NULL;
    if(!$setting_data) {
        $model = TableModel::getInstance('doc_setting' , 'ds_id');
        $setting_data = $model->where("ds_isopen=1")->order('ds_id ASC')->query();
    }
    return $setting_data;
}

function doc_content($url) {
    static $content_row = NULL;

    if($url == '_navbar.md') {
        $model = TableModel::getInstance('doc_nav' , 'dn_id');
        $rows = $model->where('dn_pid=0')->order('dn_order ASC')->query();
        $navs = array();
        foreach($rows as $row) {
            $navs[] = '* ['.$row['dn_name'].'](/'.$row['dn_path'].'/)';
        }

        return implode("\r\n" , $navs);
    }

    if(strrchr($url,'_sidebar.md')=='_sidebar.md' ) {
        return _get_sidebar($url);
    }

    if(strrchr($url,'README.md')=='README.md' ) {
        return _get_home($url);
    }

    if(strpos($url , '/cid/') !== FALSE) {
        return _get_cont($url);
    }

    static $content_row = NULL;
    if(!$content_row) {
        $model = TableModel::getInstance('doc_setting' , 'ds_id');
        $content_row = $model->where("ds_name='".$url."'")->order('ds_id DESC')->query();
    }
    if(count($content_row) > 0) {
        return $content_row[0]['ds_content'];
    }

    return NULL;
}

function _get_sidebar($url) {
    $urlarr = explode('/' , $url);
    $model = TableModel::getInstance('doc_nav' , 'dn_id');
    $rows = $model->where("dn_path='".$urlarr[0]."'")->order('dn_id DESC')->range(0,1)->query();
    $p_id = 0;
    $path = '';
    if(count($rows) > 0) {
        $p_id = $rows[0]['dn_id'];
        $path = $rows[0]['dn_path'];
    }
    $rows = $model->where('dn_pid='.$p_id)->order('dn_order ASC')->range(0, 1000)->query();
    $cmodel = TableModel::getInstance('content' , 'c_id');
    $clist = $cmodel->where("c_type='doc' AND c_parentid=".$p_id)->order('c_order ASC,c_id ASC')->query();
    $navs = array();
    foreach($rows as $row) {
        $navs[] = '- '.$row['dn_name'];
        $navs[] = "\r\n";
        foreach($clist as $citem) {
            if($citem['c_cateid'] == $row['dn_id']) {
                $navs[] =  "  - [".$citem['c_title']."](".$path."/cid/".$citem['c_id'].".md)\r\n";
            }
        }
    }

    return implode("" , $navs);
}

function _get_cont($url) {
    $urlarr = explode('/' , $url);
    $urlarr = explode('.', end($urlarr));
    $cid = array_shift($urlarr);
    if(is_numeric($cid)) {
        $row = TableModel::getInstance('content' , 'c_id')->data('c_id' , $cid)->getRow();
        if(!$row) {
            return "Can't find content";
        }

        return $row['c_mdcont'];
    }

    return "Content is building....";
}

function _get_home($url) {
    $urlarr = explode('/' , $url);
    if(count($urlarr) == 1) {
        return "Home page content is writing.";
    } else if(count($urlarr) == 2) {
        $rows = TableModel::getInstance('doc_nav' , 'dn_id')->where("dn_path='".$urlarr[0]."'")->order('dn_id DESC')->range(0,1)->query();
        if(count($rows) > 0) {
            return $rows[0]['dn_content'];
        }
    }
    return "Home page content is Build ...";
}
?>