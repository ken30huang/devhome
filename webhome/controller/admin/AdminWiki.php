<?php
class AdminWikiController extends AdminController {

    private $c_type = 'wiki';

    public function index() {
        $cmodel = $this->getModel('content');
        $page = intval($this->http->inputGet('page'));
        $page = $page==0 ? 1 : $page;
        $pageData = $cmodel->setPageNum($page)->getPageData($this->c_type);
        $this->view->assign('rows' , $pageData['rows']);
        $this->view->assign('pager' , show_pagenums($page , $pageData['count'] , $cmodel->getPageSize() , "/admin/series"));
        $this->view();
    }

    public function save() {
        $tmodel = $this->getModel('tag');
        $post = $this->http->inputPost();
        $tags = explode(',',$post('c_tag'));
        $post['c_type'] = $this->c_type;
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

}
?>