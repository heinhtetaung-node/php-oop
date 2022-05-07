<?php

namespace Models;

trait Crud {
    public function insert($table, $data) {
        
        $keys = '';
        $values = '';
        foreach ($data as $key => $val) {
            $keys = $keys.$key.',';
            $val = "'${val}'";
            $values = $values.$val.',';
        }

        $keys = substr($keys, 0, -1);  // remove last character from string
        $values = substr($values, 0, -1);

        $sql = "INSERT INTO ${table} (${keys}) VALUES (${values})";
        $result = $this->dbcon->query($sql);
        return $result;
    }

    public function update($table, $data, $id) {
        $keys = '';
        $values = '';
        foreach ($data as $key => $val) {
            $keys = $keys.$key.',';
            $val = "'${val}'";
            $values = $values.$val.',';
        }

        $keys = substr($keys, 0, -1);  // remove last character from string
        $values = substr($values, 0, -1);

        $sql = "UPDATE ${table} (${keys}) VALUES (${values}) WHERE id = '${id}'";
        $result = $this->dbcon->query($sql);
        var_dump($result);
    }

    public function delete($table, $id) {
        $sql = "DELETE FROM ${table} WHERE id = '${id}'";
        echo $sql;
    }

    public function select($table, $offset, $limit) {
        $sql = "SELECT * FROM ${table} LIMIT ${limit} OFFSET ${offset}";
        $result = $this->dbcon->query($sql);
        $arr = $result->fetch_all(MYSQLI_ASSOC);
        return $arr;
    }
}