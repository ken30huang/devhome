<?php
Class TableModel extends MysqlModel {

    private static $_model = null;

    public function __construct($table , $keyid = 'id') {
        
        $this->table = $table;
        $this->idkey = $keyid;

        parent::__construct();
    }

    public static function getInstance($table , $keyid = 'id') {
        
        if(!self::$_model) {
            self::$_model = new TableModel($table , $keyid);
        }

        return self::$_model;
    }
}
?>