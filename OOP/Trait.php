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
        echo $sql;
    }
}

class Product {
    use Crud;
}

class Category {
    use Crud;
}

class Order {
    use Crud;
}

$product = new Product();
$product->insert('product', ['name' => 'Shirt', 'price' => 300]);
echo '<br>';
$product->update('product', ['name' => 'Shirt1', 'price' => 400], 1);
echo '<br>';

$category = new Category();
$category->insert('category', ['title' => 'main cat', 'desc' => 'main desc']);
echo '<br>';
$category->delete('category', 2);

echo '<br>';
$order = new Order();
$order->insert('order', ['totla' => 5000, 'customer' => 'mg mg']);
echo '<br>';
$order->select('order', 10, 0);