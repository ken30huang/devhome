<?php
class ContentModel extends DbModel {

    protected $table = 'content';
    protected $idkey = 'c_id';

    public function getPageData($ctype , $condition='') {
        
        if(!empty($condition)) {
            $where = $condition;
        } else {
            $where = " AND 1=1";
            if(is_string($ctype)) {
                $where .= " AND c_type='".$ctype."'";
            } else if(is_array($ctype)) {
                $where .= " AND c_type IN ('".implode("','" , $ctype)."')";
            }
        }
        $count = $this->getCount($where);
        $start = intval($this->pagenum-1)*$this->pagesize-1;
        $start = $start < 0 ? 0 : $start;
        $rows = $this->select(array('order'=>'c_pubdate DESC , c_id DESC' , 'where'=>$where, 'limit'=>$start.','.$this->pagesize));
        
        return array('rows'=>$rows, 'count'=>$count , 'page'=>$this->pagenum, 'pagesize'=>$this->pagesize);
    }

    public function getPageDataBySearch($keyword = '') {
        $where = " AND c_type!='page' ";
        if(!empty($keyword)) {
            $where .= " AND (c_title LIKE '%".$keyword."%' OR c_tag LIKE '%".$keyword."%' OR c_seokeyword LIKE '%".$keyword."%' OR c_mdcont LIKE '%".$keyword."%')";
        }
        $count = $this->getCount($where);
        $start = intval($this->pagenum-1)*$this->pagesize-1;
        $start = $start < 0 ? 0 : $start;
        $rows = $this->select(array('order'=>'c_pubdate DESC , c_id DESC' , 'where'=>$where, 'limit'=>$start.','.$this->pagesize));

        return array('rows'=>$rows, 'count'=>$count);
    }

    public function getPageTree() {
        $where = " AND c_type='page'";
        $rows = $this->select(array('order'=>'c_order ASC , c_id ASC' , 'where'=>$where));
        $pagetree = array();
        $childmap = array();
        foreach($rows as $row) {
            if(intval($row['c_parentid']) == 0) {
                $pagetree[] = $row;
            } else {
                if(!isset($childmap[$row['c_parentid']])) {
                    $childmap[$row['c_parentid']] = array();
                }
                $childmap[$row['c_parentid']][] = $row;
            }
        }
        foreach($pagetree as &$pareitem) {
            $p_id = $pareitem['c_id'];
            if(isset($childmap[$p_id])) {
                $pareitem['childs'] = $childmap[$p_id];
            } else {
                $pareitem['childs'] = array();
            }
        }

        return $pagetree;
    }

    public function getParentNodes() {
        $where = " AND c_type='page' AND c_parentid=0";
        $rows = $this->select(array('order'=>'c_order ASC , c_id ASC' , 'where'=>$where));
        return $rows;
    }

    public function getLast($c_type , $limit) {
        $where = " AND c_type='".$c_type."'";
        $rows = $this->select(array('order'=>'c_pubdate DESC' , 'where'=>$where, 'limit'=>'0,'.$limit));
        return $rows;
    }

    public function getContentLink($citem) {
        
        if($citem['c_type'] == 'article') {
            return 'blog/detail/'.$citem['c_alias'];
        } else if($citem['c_type'] == 'series') {
            return 'series/detail/'.$citem['c_id'];
        } else if($citem['c_type'] == 'wiki') {
            return 'wiki/detail/'.$citem['c_id'];
        } else if($citem['c_type'] == 'snippet') {
            return 'snippet/detail/'.$citem['c_id'];
        }

        return '';
    }
}
?>