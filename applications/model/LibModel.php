<?php
class LibModel extends DbModel {

    protected $table = 'libs';
    protected $idkey = 'lib_id';

    public function getPageData() {
        $count = $this->getCount("");
        $start = intval($this->pagenum-1)*$this->pagesize-1;
        $start = $start < 0 ? 0 : $start;
        $rows = $this->select(array('order'=>'lib_id DESC' ,'limit'=>$start.','.$this->pagesize));
        return array('rows'=>$rows, 'count'=>$count);
    }
}
?>