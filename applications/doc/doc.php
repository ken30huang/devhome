<?php
function doc_run() {

    $url = str_replace('/doc/','', $_SERVER['REQUEST_URI']);
    // echo $url;
    if(!$url) {
        $setting_data = get_setting();
        require(THEME_PATH.DS.'template.php');
    } else {
        $content = doc_content($url);
        // var_dump($content);
        if(empty($content)) {
            echo "Page is Build....";
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
    if(!$content_row) {
        $model = TableModel::getInstance('doc_setting' , 'ds_id');
        $content_row = $model->where("ds_name='".$url."'")->order('ds_id DESC')->query();
    }
    if(count($content_row) > 0) {
        return $content_row[0]['ds_content'];
    }

    return NULL;
}
?>