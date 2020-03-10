<?php
Class TableModel extends DbModel {

    private static $_model = array();

    public function __construct($table , $keyid = 'id') {
        
        $this->table = $table;
        $this->idkey = $keyid;

        parent::__construct();
    }

    public static function getInstance($table , $keyid = 'id') {
        
        if(!isset(self::$_model[$table])) {
            self::$_model[$table] = new TableModel($table , $keyid);
        }

        return self::$_model[$table];
    }
}
?>