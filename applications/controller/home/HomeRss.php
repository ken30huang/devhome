<?php
class HomeRssController extends IndexBaseController {

    public function index() {
        $series_list = $this->getModel('rss')->order('rss_id ASC')->query();
        $this->assign('rss_list' , $series_list);
        $this->display();
    }
}
?>