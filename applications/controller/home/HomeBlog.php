<?php
class HomeBlogController extends IndexBaseController {

    public function index() {
        $cmodel = $this->getModel('content');
        $page = intval($this->http->inputGet('page'));
        $page = $page==0 ? 1 : $page;
        $pageData = $cmodel->setPageNum($page)->getPageData('article');

        $seriesList = $cmodel->getLast('series', 50);
        $pseries = array();
        foreach($seriesList as $series) {
            if(intval($series['c_parentid']) == 0) {
                $pseries[$series['c_id']] = $series['c_title'];
            }
        }
        
        foreach($pageData['rows'] as &$item) {
            $item['c_tags'] = explode(',' , $item['c_tag']);
        }
        $this->assign('all_list' , $pageData['rows']);
        $this->assign('pseries' , $pseries);
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