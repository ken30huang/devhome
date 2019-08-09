<?php
class AdminSeriesController extends AdminController {

    private $c_type = 'series';

    public function index() {
        $cmodel = $this->getModel('content');
        $pageData = $cmodel->where("c_type='".$this->c_type."' AND c_parentid=0")->order('c_id DESC')->query();
        $this->view->assign('rows' , $pageData);
        $this->view();
    }

    public function sublist() {
        $cmodel = $this->getModel('content');
        $pageData = $cmodel->where("c_type='".$this->c_type."' AND c_parentid=".$this->http->inputGet('c_id'))->order('c_order ASC, c_id ASC')->query();
        $this->view->assign('rows' , $pageData);
        $this->view->assign('c_parentid' , $this->http->inputGet('c_id'));
        $this->view();
    }

    public function save() {
        $tmodel = $this->getModel('tag');
        $post = $this->http->inputPost();
        $post['c_type'] = $this->c_type;
        $tags = explode(',',$post['c_tag']);
        foreach($tags as $tname) {
            if(empty($tname)) continue;
            $tcount = $tmodel->getCount(" AND tag_name='".$tname."'");
            if($tcount == 0) {
                $tmodel->data(array('tag_name'=>$tname))->save();
            }
        }
        if(intval($post['c_id']) == 0) {
            $post['c_pubdate'] = date('Y-m-d H:i:s');
        }
        $this->getModel('content')->data($post)->save();
        $this->http->success()->json();
    }

    public function del() {
        $this->getModel('content')->data('c_id' , $this->http->inputPost('del_id'))->deleteById();
        $this->http->success()->json();
    }

    public function add() {

        $cmodel = $this->getModel('content');
        $tmodel = $this->getModel('tag');
        $row = $cmodel->data('c_id' , $this->http->inputGet('c_id'))->getRow();
        $tagRows = $tmodel->select();

        $this->view->assign('row' , $row);
        $this->view->assign('tags' , $tagRows);
        $this->view();
    }

    public function subadd() {

        $cmodel = $this->getModel('content');
        $tmodel = $this->getModel('tag');
        $row = $cmodel->data('c_id' , $this->http->inputGet('c_id'))->getRow();
        $tagRows = $tmodel->select();

        $this->view->assign('row' , $row);
        $this->view->assign('tags' , $tagRows);
        $this->view->assign('c_parentid' , $this->http->inputGet('c_parentid'));
        $this->view();
    }

}
?>