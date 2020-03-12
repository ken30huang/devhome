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

    public function frontwiki() {
        $limit = 10;
        $key_word = $this->http->inputPost('key_word');
        $where = "c_type='knowledge'";
        if(strlen($key_word) > 0) {
            $where .= " AND (c_title LIKE '%".$key_word."%' OR c_cont LIKE '%".$key_word."%' 
                OR c_tag LIKE '%".$key_word."%')";
        }
        if(strlen($key_word) > 0) {
            $limit = 1000;
        }
        $rows = $this->getModel('content')->where($where)->order('c_pubdate DESC')->range(0, $limit)->query();
        $this->http->res('rows' , $rows)->success()->json();
    }

    public function tags() {
        $rows = $this->getModel('tag')->where("tag_type='knowledge'")->order('tag_id DESC')->query();
        $this->http->res('rows' , $rows)->success()->json();
    }

    public function cinfo() {
        $row = $this->getModel('content')->data('c_id' , $this->http->inputPost('c_id'))->getRow();
        $this->http->res('row' , $row)->success()->json();
    }

}
?>