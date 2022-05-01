<?php

namespace Controllers;

use Models\Product;

class ProductController {

    public $productModel;

    public function __construct() {
        $this->productModel = new Product();
    }

    public function select() {
        $datas = $this->productModel->select('item', 0, 10);   
        require_once(__DIR__.'/../Views/productList.php');
        exit;
    }

    public function create() {
        echo 'create';
    }
    
    public function detail($id) {
        echo $id;
    }

    public function delete($id) {
        echo $id;
    }

}