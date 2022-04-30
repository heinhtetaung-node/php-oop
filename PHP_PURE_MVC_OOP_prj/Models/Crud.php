<?php

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
        echo $sql;
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
        echo $sql;
    }

    public function delete($table, $id) {
        $sql = "DELETE FROM ${table} WHERE id = '${id}'";
        echo $sql;
    }

    public function select($table, $offset, $limit) {
        $sql = "SELECT * FROM ${table} LIMIT ${limit} OFFSET ${offset}";
        return [
            [
                'name' => 'abc',
                'price' => 100
            ],
            [
                'name' => 'abc1',
                'price' => 1001
            ],
            [
                'name' => 'abc2',
                'price' => 1002
            ]
        ];
    }
}