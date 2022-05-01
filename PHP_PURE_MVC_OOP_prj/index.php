<?php

use Controllers\ProductController;

require_once('vendor/autoload.php');

$action = isset($_GET['action'])? $_GET['action'] : '';
$method = isset($_GET['method'])? $_GET['method'] : '';
$id = isset($_GET['id'])? $_GET['id'] : '';

$productController = new ProductController();

switch ($action) {
    case 'product':
        if ($method == 'create') {

            $productController->create();

        } else if ($method == 'select') {

            $productController->select();    

        } else if ($method == 'delete') {

            if (is_numeric($id)) {
                $productController->delete($id);
            } else {
                echo '404'; exit;
            }

        } else { // detail
            
            if (is_numeric($method)) {
                $id = $method;
                $productController->detail($id);
            } else {
                echo '404'; exit;
            }
            
        }
        break;

    case '':
        echo 'home';
        break;

    default:
        echo '404';
}