<?php
class LibModel extends DbModel {

    protected $table = 'libs';
    protected $idkey = 'lib_id';

    public function getPageData($where="") {
        $count = $this->getCount($where);
        $start = intval($this->pagenum-1)*$this->pagesize-1;
        $start = $start < 0 ? 0 : $start;
        $rows = $this->select(array('where'=>$where, 'order'=>'lib_id DESC' ,'limit'=>$start.','.$this->pagesize));
        return array('rows'=>$rows, 'count'=>$count);
    }
}
?>