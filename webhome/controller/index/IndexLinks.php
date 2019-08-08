<?php
class IndexLinksController extends IndexBaseController {

    public function index() {
        $cate_list = $this->getModel('category')->getChilds(9);
        $links_list = $this->getModel('content')->where("c_type='collect'")->order('c_pubdate DESC')->query();

        $c_groups = array();
        foreach($links_list as $link) {
            if(!isset($c_groups[$link['c_cateid']])) {
                $c_groups[$link['c_cateid']] = array();
            }
            $c_groups[$link['c_cateid']][] = $link;
        }
        $catemaps = array();
        $idx = 0;
        foreach($cate_list as $cate) {
            $catemaps[$cate['cate_id']] = array(
                'cate_idx'=>$idx,
                'cate_name'=>$cate['cate_name'],
                'c_lists'=>array()
            );
            if(isset($c_groups[$cate['cate_id']])) {
                $catemaps[$cate['cate_id']]['c_lists'] = $c_groups[$cate['cate_id']];
            }
            $idx++;
        }
        $this->assign('catemaps' , $catemaps);
        $this->display();
    }
}
?>