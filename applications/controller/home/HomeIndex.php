<?php
class HomeIndexController extends IndexBaseController {

    public function index() {

        $c_model = $this->getModel('content');
        $where = "AND (c_type='article' OR c_type='series' OR c_type='wiki' OR c_type='snippet')";
        $page = intval($this->http->inputGet('page'));
        $page = $page==0 ? 1 : $page;
        $all_list = $c_model->setPageNum($page)->getPageData("" , $where);
        $rows = $all_list['rows'];
        foreach($rows as &$item) {
            $item['c_tags'] = explode(',' , $item['c_tag']);
            $item['c_viewlink'] = $c_model->getContentLink($item);
        }

        $this->assign('all_list' , $rows);
        $this->assign('pager' , page_show($all_list['page'] , $all_list['count'] , $all_list['pagesize'] , '/home/index'));
        $this->display();
    }
}
?>