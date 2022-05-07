<?php

namespace Controllers;

use Models\Product;
use Models\SubCaetgory;

class ProductController {

    public $productModel;
    public $subCategory;

    public function __construct() {
        $this->productModel = new Product();
        $this->subCategory = new SubCaetgory();
    }

    public function select() {
        $datas = $this->productModel->select('item', 0, 10);   
        require_once(__DIR__.'/../Views/productList.php');
        exit;
    }

    public function create() {
        $subcategories = $this->subCategory->select('subcategory ', 0, 100);
        require_once(__DIR__.'/../Views/productCreate.php');
        exit;
    }
    
    public function detail($id) {
        echo $id;
    }

    public function delete($id) {
        echo $id;
    }

}