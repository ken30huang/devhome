<?php
class HomeCodesnippetController extends IndexBaseController {

    public function index() {
        $codenames = array();
        $category_model = $this->getModel('category');
        foreach($category_model->getChilds(15) as $codeitem) {
            $codenames[$codeitem['cate_id']] = $codeitem['cate_name'];
        }

        $cmodel = $this->getModel('content');
        $page = intval($this->http->inputGet('page'));
        $page = $page==0 ? 1 : $page;
        $pageData = $cmodel->setPageNum($page)->getPageData('snippet');
        $this->assign('rows' , $pageData['rows']);
        $this->assign('codenames' , $codenames);
        $this->assign('pager' , page_show($page , $pageData['count'] , $cmodel->getPageSize() , "/blog"));
        $this->display();
    }
}
?>