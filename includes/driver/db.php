<?php
class DbDriver {

	private $_dbh;
	private $_prex;
	
	public function __construct($config) {

		try {
			$dsn = $config['dbtype'].":dbname=".$config['dbname'].";host=".$config['host'];
			$user = $config['user'];
			$pwd = $config['pwd'];
			$this->_dbh = new PDO($dsn , $user , $pwd);
			$this->_dbh->query("SET NAMES utf8");
			$this->_prex = $config['prex'];
		} catch(PDOException $e) {
			die("Connection Error: ".$e->getMessage());
		}
	}

	public function checkError() {
		$result = $this->_dbh->errorInfo();
		if($result[0] != '00000') {
			die("SQL Error:" . $result[2]);
		}
	}

	public function select($table , $options) {

		$rows = array();

		$fields = isset($options['field']) ? $options['field'] : '*';
		$where = isset($options['where']) ? $options['where'] : '';
		$order = isset($options['order']) ? ' ORDER BY '.$options['order'] : '';
		$group = isset($options['group']) ? ' GROUP BY '.$options['group'] : '';
		$join = isset($options['join']) ? $options['join'] : '';
		$limit = isset($options['limit']) ? ' LIMIT '.$options['limit'] : '';

		$sql = "SELECT ".$fields." FROM ".$this->_prex.$table." AS ".$table." ".$join." WHERE 1 ".$where.$group.$order.$limit;
		$res = $this->_dbh->query($sql , PDO::FETCH_ASSOC);

		$this->checkError();
		foreach($res as $row) {
			$rows[] = $row;
		}
		return $rows;
	}


	public function insert($table , $data) {

		$fields = array_keys($data);
		$values = array_values($data);
		foreach($values as &$v) {
			$v = $this->_dbh->quote($v);
		}

		$sql = "INSERT INTO ".$this->_prex.$table."(".implode(',' , $fields).") VALUES(".implode(',' , $values).")";
		// echo $sql;
		$res = $this->_dbh->exec($sql);
		$this->checkError();

	}

	public function update($table , $data , $where) {

		$sets = array();
		foreach($data as $k=>$v) {
			$sets[] = $k."=".$this->_dbh->quote($v);
		}

		$sql = "UPDATE ".$this->_prex.$table." SET ".implode(",",$sets)." WHERE ".$where;
		$res = $this->_dbh->exec($sql);
		$this->checkError();
	}

	public function delete($table , $where) {

		$sql = "DELETE FROM ".$this->_prex.$table." WHERE ".$where;
		$res = $this->_dbh->exec($sql);
		$this->checkError();
	}

	public function getCount($table , $where) {

		$sql = "SELECT * FROM ".$this->_prex.$table." WHERE 1 ".$where;
		$res = $this->_dbh->prepare($sql);
		$res->execute();
		$this->checkError();

		return $res->rowCount();
	}

	public function quote($v) {
		return $this->_dbh->quote($v);
	}

	public function getInsertID() {
		return $this->_dbh->lastInsertId();
	}
}
?>