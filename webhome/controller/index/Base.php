<?php
class IndexBaseController extends WebController {

    private $_assigns = array('v'=>'index' , 'body'=>'' , 'script'=>'' , '');

    public function display() {

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
        }
        $this->_assigns['menu_list'] =$menu_list;

        //主模板
        $tmpl_path = THEME_PATH.DS.$sel_ui['ui_path'].DS.'template.php';
        // echo V_PATH;

        $v_cont = theme_load(V_PATH.DS.C_NAME.DS.A_NAME.'.php' , $this->_assigns);
        $this->_assigns['body'] = $v_cont;
        echo theme_load($tmpl_path , $this->_assigns);
    }

    protected function assign($key , $val) {
        $this->_assigns[$key] = $val;
    }
}
?>