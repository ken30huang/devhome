<?php
//用于渲染模板的函数库
//导航栏
function theme_navbar(&$themes_data) {
    $v_path = THEME_PATH.DS.$themes_data['theme_path'].DS.'navbar.php';
    $themes_data['navbar'] = theme_load($v_path);
}

//渲染所有
function theme_render($themes_data) {

    $v_path = V_PATH.DS.$themes_data['theme_path'].DS.$themes_data['theme_view'].'.php';
    $themes_data['body'] = theme_load($v_path);

    $layout_path = THEME_PATH.DS.$themes_data['theme_path'].DS.'template.php';
    echo theme_load($layout_path , array('data'=>$themes_data));
}

?>