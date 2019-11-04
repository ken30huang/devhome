<?php
class CategoryModel extends DbModel {

    protected $table = 'category';
    protected $idkey = 'cate_id';

    public function getChilds($pid) {
        return $this->where('cate_pid='.$pid)->order('cate_id ASC')->query();
    }

    public function getCateMap($pid) {
        $rows = $this->getChilds($pid);
        $map = array();
        foreach($rows as $cateitem) {
            $map[$cateitem['cate_id']] = $cateitem['cate_name'];
        }
        return $map;
    }
    
}
?>