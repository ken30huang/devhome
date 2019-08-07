<?php
class IndexBlogController extends IndexBaseController {

    public function index() {
        $cmodel = $this->getModel('content');
        $page = intval($this->http->inputGet('page'));
        $page = $page==0 ? 1 : $page;
        $pageData = $cmodel->setPageNum($page)->getPageData('article');
        $this->assign('rows' , $pageData['rows']);
        $this->assign('pager' , page_show($page , $pageData['count'] , $cmodel->getPageSize() , "/blog"));
        $this->display();
    }

    public function detail() {
        $uris = $this->uri->all();
        $alias = end($uris);
        echo $alias;
    }
}
?>