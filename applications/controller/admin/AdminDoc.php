<?php
class AdminDocController extends AdminController {


    public function setting() {

        $this->checkLogin();
        $model = TableModel::getInstance('doc_setting' , 'ds_id');
        $this->view->assign('rows' , $model->query());
        $this->view->assign('json' , json_encode($model->query()));
        $this->view();
    }

    public function setsave() {
        $model = TableModel::getInstance('doc_setting' , 'ds_id');
        $model->data($this->http->inputPost())->save();
        $this->http->success()->json();
    }

    public function setedit() {
        $model = TableModel::getInstance('doc_setting' , 'ds_id');
        $row = $model->data('ds_id' , $this->http->inputPost('edit_id'))->getRow();
        $this->http->res('row' , $row)->success()->json();
    }

    public function setdel() {
        $model = TableModel::getInstance('doc_setting' , 'ds_id');
        $demo_id = $this->http->inputPost('del_id');
        $model->data('ds_id' , $demo_id)->deleteById();
        $this->http->success()->json();
    }

    public function nav() {

        $this->checkLogin();
        $this->view->assign('navdata' , $this->_getNav());
        $this->view();
    }

    public function navsave() {
        $model = TableModel::getInstance('doc_nav' , 'dn_id');
        $model->data($this->http->inputPost())->save();
        $this->http->success()->json();
    }

    public function navedit() {
        $model = TableModel::getInstance('doc_nav' , 'dn_id');
        $row = $model->data('dn_id' , $this->http->inputPost('edit_id'))->getRow();
        $this->http->res('row' , $row)->success()->json();
    }

    public function navdel() {
        $model = TableModel::getInstance('doc_nav' , 'dn_id');
        $demo_id = $this->http->inputPost('del_id');
        $model->data('dn_id' , $demo_id)->deleteById();
        $this->http->success()->json();
    }

    private function _getNav() {
        $model = TableModel::getInstance('doc_nav' , 'dn_id');
        $rows = $model->order('dn_order ASC, dn_id ASC')->query();
        $navdata = array();
        foreach($rows as $row) {
            if(!isset($navdata[$row['dn_type']])) {
                $navdata[$row['dn_type']] = array(
                    'name'=>($row['dn_type']==1?'顶部导航':'侧边导航'),
                    'navs'=>array()
                );
            }
        }
        $navs = array();
        foreach($rows as $row) {
            if(!isset($navs[$row['dn_type']])) {
                $navs[$row['dn_type']] = array();
            }
            if(!isset($navs[$row['dn_type']][$row['dn_id']]) && $row['dn_pid'] == 0) {
                //一级导航
                $navs[$row['dn_type']][$row['dn_id']] = array(
                    'id'=>$row['dn_id'],
                    'order'=>$row['dn_order'],
                    'name'=>$row['dn_name'],
                    'childs'=>array()
                );
            } else if($row['dn_pid'] > 0) {
                //二级导航
                $navs[$row['dn_type']][$row['dn_pid']]['childs'][] = $row;
            }
        }

        foreach($navdata as $key=>&$value) {
            $navdata[$key]['navs']=$navs[$key];
        }

        return $navdata;
    }

    public function navchild() {
        $model = TableModel::getInstance('doc_nav' , 'dn_id');
        $dn_type = $this->http->inputPost('dn_type');
        $rows = $model->where('dn_pid=0 AND dn_type='.$dn_type)->query();
        $this->http->res('rows' , $rows)->success()->json();
    }

    public function clist() {
        $model = $this->getModel('content');
        $dn_id = $this->http->inputGet('dn_id');
        $rows = $model->where('c_cateid='.$dn_id." AND c_type='doc'")->order('c_order ASC, c_id ASC')->query();
        $this->assign('rows' , $rows);
        $this->assign('dn_id' , $dn_id);
        $this->view();
    }

    public function cadd() {
        $model = $this->getModel('content');
        $dn_id = $this->http->inputGet('dn_id');
        $c_id = $this->http->inputGet('c_id');
        $row = $model->data('c_id' , $this->http->inputGet('c_id'))->getRow();
        $this->assign('row' , $row);
        $this->assign('dn_id' , $dn_id);
        $this->view();
    }

    public function csave() {
        $model = $this->getModel('content');
        $post = $this->http->inputPost();
        $row = TableModel::getInstance('doc_nav' , 'dn_id')->data("dn_id", $post['c_cateid'])->getRow();
        if($row) {
            $post['c_parentid'] = $row['dn_pid'];
        }
        $model->data($post)->save();
        $this->http->success()->json();
    }

    public function navordersave() {
        $model = TableModel::getInstance('doc_nav' , 'dn_id');
        $post = $this->http->inputPost();
        foreach($post['orders'] as $order) {
            $model->data(array('dn_id'=>$order['id'] , 'dn_order'=>$order['order']))->save();
        }
        $this->http->success()->json();
    }

    public function cordersave() {
        $model = $this->getModel('content');
        $post = $this->http->inputPost();
        foreach($post['orders'] as $order) {
            $model->data(array('c_id'=>$order['id'] , 'c_order'=>$order['order']))->save();
        }
        $this->http->success()->json();
    }
}
?>