<?php
//专用于mysql的模型
class MysqlModel {
    
    protected $db;
    protected $table;
    protected $idkey='id';
    protected $data = array();
    protected $lastId='';
    protected $pagenum = 0;
    protected $pagesize = 10;
    private $_queryOptions = array();

    public function __construct() {
        //从驱动获取数据库操作对象
        $this->db = Driver::get('pdo');
    }

    public function data($key , $val=NULL) {
        if(is_array($key)) {
            $this->data = $key;
        } else if(is_string($key) && $val != NULL) {
            $this->data[$key] = $val;
        }
        return $this;
    }

    private function _getIdVal() {
        return isset($this->data[$this->idkey]) ? intval($this->data[$this->idkey]) : 0;
    }

    public function save() {

        $idkey = $this->_getIdVal();
        if($idkey > 0) {
            $this->lastId = $idkey;
            $this->db->update($this->table , $this->data , $this->idkey.'='.$idkey);
        } else {
            $this->db->insert($this->table , $this->data);
            $this->lastId = $this->db->getInsertID();
        }
        
        return $this;
    }

    public function table($table) {
        $this->table = $table;
        return $this;
    }

    public function getRow() {
        $idkey = $this->_getIdVal();
        $rows = $this->db->select($this->table , array('where'=>" AND ".$this->idkey."=".$idkey, 'limit'=>'1'));
        if(count($rows) == 0) {
            return false;
        }

        return $rows[0];
    }

    public function select($options=array()) {
        return $this->db->select($this->table , $options);
    }

    public function deleteById() {
        $idkey = $this->_getIdVal();
        $this->db->delete($this->table, $this->idkey."=".$idkey);
    }

    public function deleteByWhere($where) {
        $this->db->delete($this->table, $where);
    }

    public function setKey($key) {
        $this->idkey = $key;
        return $this;
    }

    public function getInsertID() {
        return $this->lastId;
    }

    public function getCount($where) {
        return $this->db->getCount($this->table , $where);
    }

    public function where($where) {
        $this->_queryOptions['where'] = ' AND '.$where;
        return $this;
    }

    public function join($join) {
        $this->_queryOptions['join'] = $join;
        return $this;
    }

    public function group($group) {
        $this->_queryOptions['group'] = $join;
        return $this;
    }

    public function order($order) {
        $this->_queryOptions['order'] = $order;
        return $this;
    }

    public function fields($fields) {
        $this->_queryOptions['field'] = $fields;
        return $this;
    }

    public function query() {
        return $this->db->select($this->table , $this->_queryOptions);
    }

    public function range($start , $limit) {
        $this->_queryOptions['limit'] = $start.','.$limit;
        return $this;
    }

    public function setPageNum($page=1) {
        $this->pagenum = $page;
        return $this;
    }

    public function getPageSize() {
        return $this->pagesize;
    }

    public function modify($where) {
        $this->db->update($this->table , $this->data , $where);
    }
    
}
?>