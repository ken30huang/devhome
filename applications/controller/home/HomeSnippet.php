<?php
class HomeSnippetController extends IndexBaseController {

    public function index() {
        $c_model = $this->getModel('content');
        $page = intval($this->http->inputGet('page'));
        $page = $page==0 ? 1 : $page;
        $all_list = $c_model->setPageNum($page)->getPageData("snippet");
        $rows = $all_list['rows'];
        foreach($rows as &$item) {
            $item['c_viewlink'] = $c_model->getContentLink($item);
        }

        $cate_model = $this->getModel('category');
        $cate_map = $cate_model->getCateMap(15);

        $this->assign('all_list' , $rows);
        $this->assign('cate_map' , $cate_map);
        $this->assign('pager' , page_show($all_list['page'] , $all_list['count'] , $all_list['pagesize'] , '/home/index'));
        $this->display();
    }

    public function detail() {
        $uris = $this->uri->all();
        $cmodel = $this->getModel('content');
        $snippet_model = $this->getModel('snippet');
        $row = $cmodel->data('c_id', end($uris))->getRow();
        
        $this->assign('row' , $row);
        $this->assign('files' , $snippet_model->getList($row['c_id']));
        $this->display();
    }
}
?>