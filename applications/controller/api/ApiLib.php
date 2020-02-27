<?php
class ApiLibController extends WebController {

    //搜索前端库
    public function front() {
        $limit = 10;
        $post = $this->http->inputPost();
        $where = "lib_status=1 ";
        if(isset($post['cate_id'])) {
            $cate_arr = explode(',' , $post['cate_id']);
            $where_or = array();
            $where .= " AND (";
            foreach($cate_arr as $cate_id) {
                $where_or[] = "lib_cateid LIKE '%".intval($cate_id).",%'";
            }
            $where .= implode(' OR ' , $where_or).")";
        }
        if(isset($post['lib_name'])) {
            $where .= " AND (lib_intro_show LIKE '%".$post['lib_name']."%' OR lib_name LIKE '%".$post['lib_name']."%' 
                OR lib_keyword LIKE '%".$post['lib_name']."%')";
        }
        if(count($post) > 0) {
            $limit = 1000;
        }
        $rows = $this->getModel('lib')->where($where)->order('lib_id DESC')->range(0, $limit)->query();
        $this->http->res('rows' , $rows)->success()->json();
    }

    public function frontcates() {
        $lib_cates = $this->getModel('category')->getChilds(33);
        $this->http->res('rows' , $lib_cates)->success()->json();
    }
}
?>