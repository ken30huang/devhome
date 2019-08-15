<?php
class DemoModel extends DbModel {

    protected $table = 'demo';
    protected $idkey = 'demo_id';

    public function getPageData() {
        $count = $this->getCount('');
        $start = intval($this->pagenum-1)*$this->pagesize-1;
        $start = $start < 0 ? 0 : $start;
        $rows = $this->select(array('order'=>'demo_id DESC' , 'limit'=>$start.','.$this->pagesize));

        return array('rows'=>$rows, 'count'=>$count);
    }
}
?>