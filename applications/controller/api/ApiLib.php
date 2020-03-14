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
        $openid = $this->http->inputPost('openid');
        $where = " AND content.c_type='knowledge'";
        if(strlen($key_word) > 0) {
            $where .= " AND (c_title LIKE '%".$key_word."%' OR c_cont LIKE '%".$key_word."%' 
                OR c_tag LIKE '%".$key_word."%')";
        }
        if(strlen($key_word) > 0) {
            $limit = 1000;
        }
        $selectOptions = array(
            'field'=>' content.c_id , content.c_title,content.c_summery, content.c_tag, b.cf_openid as openid',
            'join'=>"LEFT JOIN (select * from dh_content_collects where cf_openid='".$openid."' group by cf_cid) b ON content.c_id=b.cf_cid",
            'limit'=>'0 , '.$limit,
            'where'=>$where,
            'order'=>'content.c_pubdate DESC'
        );
        $rows = $this->getModel('content')->select($selectOptions);
        foreach($rows as &$item) {
            $item['iscollect'] = 0;
            if(!empty($item['openid'])) {
                $item['iscollect'] = 1;
            }
            unset($item['openid']);
        }
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

    public function collect() {
        $collectTM = TableModel::getInstance('content_collects');
        $post = array(
            'cf_cid'=>$this->http->inputPost('cid'),
            'cf_openid'=>$this->http->inputPost('openid'),
            'cf_addtime'=>date('Y-m-d H:i:s')
        );
        $where = " AND cf_cid=".$post['cf_cid']." AND cf_openid='".$post['cf_openid']."'";
        $count = $collectTM->getCount($where);
        if($count > 0) {
            $collectTM->deleteByWhere('1 '.$where);
        } else {
            $collectTM->data($post)->save();
        }
        $this->http->success()->json();
    }

    public function viewcont() {
        $cid = intval($this->http->inputPost('c_id'));
        $cModel = $this->getModel('content');
        $row = $cModel->data('c_id' , $cid)->getRow();
        $vcount = intval($row['c_viewcount'])+1;
        $cModel->data(array('c_id'=>$cid , 'c_viewcount'=>$vcount))->save();
        $this->http->success()->json();
    }

    public function mycollects() {
        $collectTM = TableModel::getInstance('content_collects');
        $rows = $collectTM->where("cf_openid='".$this->http->inputPost('openid')."'")->order('cf_addtime DESC')->query();
        $this->http->res('rows' , $rows)->success()->json();
    }

}
?>