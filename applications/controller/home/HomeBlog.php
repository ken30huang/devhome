<?php
class HomeBlogController extends IndexBaseController {

    public function index() {
        $cmodel = $this->getModel('content');
        $tagmodel = $this->getModel('tag');
        $page = intval($this->http->inputGet('page'));
        $page = $page==0 ? 1 : $page;
        $condition = '';
        if(!empty($this->http->inputGet('tag'))) {
            $tag = urldecode($this->http->inputGet('tag'));
            $condition = "c_tag LIKE '%".$tag."%'";
        }
        $pageData = $cmodel->setPageNum($page)->getPageData('article' , $condition);
        
        foreach($pageData['rows'] as &$item) {
            $item['c_tags'] = explode(',' , $item['c_tag']);
        }
        $this->assign('all_list' , $pageData['rows']);
        $this->assign('all_tags' , $tagmodel->select());
        $this->assign('pager' , page_show($page , $pageData['count'] , $cmodel->getPageSize() , "/blog"));
        $this->display();
    }

    public function detail() {
        $uris = $this->uri->all();
        $alias = end($uris);
        
        $cmodel = $this->getModel('content');
        $result = $cmodel->where("c_alias='".$alias."'")->order('c_pubdate DESC,c_id DESC')->range(0,1)->query();

        $this->assign('row' , $result[0]);
        $this->display();
    }
}
?>