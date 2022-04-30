<?php

require_once('Controllers/ProductController.php');

$action = isset($_GET['action'])? $_GET['action'] : '';

$productController = new ProductController();

switch ($action) {
    case 'product':
        $productController->select();
        break;

    case '':
        echo 'home';
        break;

    default:
        echo 'home';
}