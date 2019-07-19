<?php
class ContentModel extends BaseModel {

    protected $table = 'content';
    protected $idkey = 'c_id';

    public function getPageData($ctype) {
        $rows = $this->select(array('order'=>'c_id ASC' , 'where'=>" AND c_type='".$ctype."'"));
        return array('rows'=>$rows);
    }
}
?>