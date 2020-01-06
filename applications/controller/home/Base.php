<?php
class IndexBaseController extends WebController {

    private $_assigns = array('v'=>'index' , 'body'=>'' , 'script'=>'' , '');

    public function display($tmpl='') {

        $ui_model = $this->getModel('ui');
        $ui_rows = $ui_model->order('ui_id DESC')->query();
        $sel_ui = NULL;
        foreach($ui_rows as $ui_item) {
            if($ui_item['ui_isactive'] == 1) {
                $sel_ui = $ui_item;
                break;
            }
        }
        if($sel_ui === NULL) {
            $sel_ui = $ui_rows[0];
        }

        $cont_model = $this->getModel('content')->clearQuery();
        $menu_list =  $cont_model->where("c_type='page'")->order('c_order ASC,c_id ASC')->query();
        $alias = $this->uri->get(0);

        foreach($menu_list as &$menu) {
            $menu['isactive'] = 0;
            $alia_arr = explode('/' , $menu['c_alias']);
            if(count($alia_arr) > 1) {
                array_shift($alia_arr);
            }
            if($alias == $alia_arr[0]) {
                $menu['isactive'] = 1;
            }
            $menu['c_alias'] = module_url($menu['c_alias']);
        }
        $this->assign('menu_list' , $menu_list);
        $this->assign('ui_path' , MODULE_NAME.'/'.$sel_ui['ui_path']);

        //主模板
        $tmpl_path = APP_PATH.DS.'layouts'.DS.MODULE_NAME.DS.$sel_ui['ui_path'];
        if(empty($tmpl)) {
            $this->view->setTheme($tmpl_path);
        } else {
            $this->view->setTheme($tmpl_path , $tmpl);
        }
        
        $v_path = APP_PATH.DS.'views'.DS.MODULE_NAME.DS.C_NAME;
        $this->view->setViewPath($v_path);

        echo $this->view->display(A_NAME);
    }

    public function vlog() {
        $ip = $this->http->getIP();
        $model = TableModel::getInstance('visitlog' , 'v_id');
        $filter_model = TableModel::getInstance('visitlog_filter' , 'vf_id');
        $f_count = $filter_model->getCount(" AND vf_ip='".$ip."'");
        if($f_count > 0) {
            return;
        }
        $logData = array(
            'v_ip'=>$ip,
            'v_link'=>$this->http->inputGet('vurl'),
            'v_logtime'=>date('Y-m-d H:i:s'),
            'v_staytime'=>intval($this->http->inputGet('vtime'))
        );
        $model->data($logData)->save();
    }
}
?>