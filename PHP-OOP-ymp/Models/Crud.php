<?php
namespace Models;

trait Crud {

	public function insert($table, $data) {
		$keys = '';
		$values = '';

		foreach ($data as $key => $value) {
			$keys .= $key. ',';
			$values .= "'${value}'". ",";	
		}
		$keys = substr($keys, 0, -1);
		$values = substr($values, 0, -1);

		$sql = "INSERT INTO ${table} (${keys}) VALUES (${values})";
		$result = $this->dbcon->query($sql);
		if ($result != true) {
			echo 'something wrong';
		}
	} 

	public function read($table, $orderby = 'id', $order = 'desc', $limit = 100, $offset = 0) {
		$sql = "SELECT * FROM ${table} ORDER BY ${orderby} ${order} LIMIT ${limit} OFFSET ${offset}";
		$result = $this->dbcon->query($sql);
		$array = $result->fetch_all(MYSQLI_ASSOC);
		return $array;
	}

	public function update($table, $data, $id) {
		$keyVal = '';
		foreach ($data as $key => $val) {
			$keyVal .= "${key}='${val}',";
		}
		
		
		$keyVal = substr($keyVal, 0, -1);
		
		
		$sql = "UPDATE ${table} SET ${keyVal} WHERE id = '${id}'";
		$result = $this->dbcon->query($sql);
		if ($result != true) {
			echo 'something wrong';
		}
		
	}

	public function delete($table, $id) {
		$sql = "DELETE FROM ${table} WHERE id = '${id}'";
		$result = $this->dbcon->query($sql);
		if ($result != true) {
			echo 'something wrong';
		}
	}

	public function getById($table, $id) {
		$sql = "SELECT * FROM ${table} WHERE id = '${id}'";
		$result = $this->dbcon->query($sql);
		$array = $result->fetch_assoc();
		return $array;
	}
}