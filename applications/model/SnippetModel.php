<?php
class SnippetModel extends DbModel {

    protected $table = 'content_snippet';
    protected $idkey = 'c_fileid';

    public function getList($c_id) {

        return $this->where('c_contid='.$c_id)->query();
    }
}
?>