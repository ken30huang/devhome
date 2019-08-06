<?php
class IndexBaseController extends WebController {

    private $_assigns = array('v'=>'index');

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

        $cont_model = $this->getModel('content');
        $this->_assigns['menu_list'] = $cont_model->where("c_type='page'")->order('c_order ASC,c_id ASC')->query();

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