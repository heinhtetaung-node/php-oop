<?php
require_once(__DIR__.'/../Models/Product.php');

class ProductController {

    public $productModel;

    public function __construct() {
        $this->productModel = new Product();
    }

    public function select() {
        $datas = $this->productModel->select('product', 10, 0);   
        require_once(__DIR__.'/../Views/productList.php');
        exit;
    }
    

}