<?php
//定义网站数据操作的函数库

//获取UI设置数据
function get_ui() {
    $ui_date = model_load('ui')->order('ui_id DESC')->query();
    return $ui_date[0];
}

//获取网站设置
function get_setting() {
    $setting_date = model_load('setting' , 'setting_id')->order('setting_id DESC')->query();
    return $setting_date[0];
}

//获取内容搜索
function get_search($keyword='') {
    $search_data = model_load('content')->getPageDataBySearch($keyword);
    return $search_data;
}

//获取内容详情
function get_cont($id=0) {
    $content_data = model_load('content')->data(array('c_id'=>$id))->getRow();
    return $content_data;
}

//获取收藏列表
function get_collects() {
    $cate_data = model_load('category', 'cate_id')->where('cate_pid=9')->query();
    $content_data = model_load('content')->order('c_pubdate')->where("c_type='collect'")->query();

    $cont_map = array();
    foreach($content_data as $cdata) {
        $cate_id = $cdata['cate_id'];
        if(isset($cont_map[$cate_id])) {
            $cont_map[$cate_id] = array();
        }
        $cont_map[$cate_id][] = $cdata;
    }

    $collect_data = array();
    foreach($cate_data as $cate) {
        $collect_item = array();
        $collect_item['cate_name'] = $cate['cate_name'];
        $collect_item['lists'] = $cont_map[$cate['cate_id']];
        $collect_data[] =  $collect_item;
    }

    return $collect_data;
}
?>