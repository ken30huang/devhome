<?php
class AdminWikiController extends AdminController {

    private $c_type = 'wiki';

    public function index() {
        $cmodel = $this->getModel('content');
        $page = intval($this->web->req('page'));
        $page = $page==0 ? 1 : $page;
        $pageData = $cmodel->setPageNum($page)->getPageData($this->c_type);
        $this->view->assign('rows' , $pageData['rows']);
        $this->view->assign('pager' , show_pagenums($page , $pageData['count'] , $cmodel->getPageSize() , "/admin/series"));
        $this->view();
    }

    public function save() {
        $tmodel = $this->getModel('tag');
        $tags = explode(',',$this->web->req('c_tag'));
        foreach($tags as $tname) {
            if(empty($tname)) continue;
            $tcount = $tmodel->getCount(" AND tag_name='".$tname."'");
            
            if($tcount == 0) {
                $tmodel->save(array('tag_name'=>$tname));
            }
        }
        if(intval($this->web->req('c_id')) == 0) {
            $this->web->setReq('c_pubdate' , date('Y-m-d H:i:s'));
        }
        $this->web->setReq('c_type' , $this->c_type);
        $this->getModel('content')->save();
        $this->getJSON();
    }

    public function del() {
        $this->web->setReq('c_id' , $this->web->reqPost('del_id'));
        $table = TableModel::getInstance('content' , 'c_id');
        $table->deleteById();
        $this->getJSON();
    }

    public function add() {

        $cmodel = $this->getModel('content');
        $tmodel = $this->getModel('tag');
        $row = $cmodel->getRow();
        $tagRows = $tmodel->select();

        $this->view->assign('row' , $row);
        $this->view->assign('tags' , $tagRows);
        $this->view();
    }

}
?>