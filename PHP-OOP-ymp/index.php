<?php 
session_start();
require_once('vendor/autoload.php');
use Controllers\ProductController;
use Brewerwall\Barcode\BarcodeGenerator;
use Brewerwall\Barcode\Constants\BarcodeType;
use Brewerwall\Barcode\Constants\BarcodeRender;

$generator = new BarcodeGenerator(BarcodeType::TYPE_CODE_128, BarcodeRender::RENDER_JPG);

// Generate our code
$generated = $generator->generate('012345678');

// Generates the same code with style updates
$generated = $generator->generate('012345678', 4, 50, '#FFCC33');

echo $generated;
exit;

$dir = __DIR__;
$dirArr = explode("\\", $dir); // backslah not working with "\", only working like "\\"
$path = $dirArr[count($dirArr)-1];
$protocolArr = explode("/", $_SERVER['SERVER_PROTOCOL']);
$protocol = strtolower($protocolArr[0]);

$baseUrl = $protocol .'://'. $_SERVER['HTTP_HOST'] .'/'. $path .'/';
define("BASE_URL", $baseUrl);


$action = isset($_GET['action'])? $_GET['action']: '';
$method = isset($_GET['method'])? $_GET['method']: '';
$id = isset($_GET['id'])? $_GET['id']: '';

$productController = new ProductController();

switch ($action) {
	case 'product':
		if ($method == 'create') {
			$productController->create();
		} else if ($method == 'edit' && $id != '') {
			$productController->edit($id);
		} else if ($method == 'update' && $_POST != []) {
			$productController->update($id);
		} else if ($method == 'delete' && $id != '') {
			$productController->delete($id);
		} else if ($method == 'select') {
			$productController->select();
		} else if (is_numeric($method)) {
			$id = $method;
			$productController->detail($id);
		} else if ($method == 'insert' && $_POST != []) {
			$productController->insert();
		} else {
			echo '404';
		}
		break;

	// case 'category':
	// 	if ($method == 'create') {
	// 		$categoryController->create();
	// 	} else if ($method == 'edit' && $id != '') {
	// 		$categoryController->edit($id);
	// 	} else if ($method == 'update' && $_POST != []) {
	// 		$categoryController->update($id);
	// 	} else if ($method == 'delete' && $id != '') {
	// 		$categoryController->delete($id);
	// 	} else if ($method == 'select') {
	// 		$categoryController->select();
	// 	} else if (is_numeric($method)) {
	// 		$id = $method;
	// 		$categoryController->detail($id);
	// 	} else if ($method == 'insert' && $_POST != []) {
	// 		$categoryController->insert();
	// 	} else {
	// 		echo '404';
	// 	}
	// 	break;

	default:
		echo 'home';
}