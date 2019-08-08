<?php
class CategoryModel extends MysqlModel {

    protected $table = 'category';
    protected $idkey = 'cate_id';

    public function getChilds($pid) {
        return $this->where('cate_pid='.$pid)->order('cate_id ASC')->query();
    }

    
}
?>