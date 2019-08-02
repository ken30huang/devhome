<?php
function home_bootstrap() {

    //获取获取
    $ui_data = get_ui();
    $setting_data = get_setting();

    //渲染模板数据
    $themes_data = array();
    //获取最终的视图路径

    //设置模板数据
    $themes_data['setting'] = $setting_data;
    $themes_data['theme_path'] = $ui_data['ui_path'];
    $themes_data['theme_view'] = _get_view_name();
    $themes_data['header'] = $ui_data['ui_headcont'];
    $themes_data['footer'] = $ui_data['ui_footercont'];
    
    //导航
    theme_navbar($themes_data);

    //渲染视图
    theme_render($themes_data);
}

//获取最终显示的视图名称
function _get_view_name() {
    
    switch(C_NAME) {
        case 'series':
        case 'wiki':
        case 'demos':
        case 'blog':
        case 'index':
            return C_NAME;
        default:
            return 'detail';
    }
}
?>