<?php

namespace Controllers;

use Models\Product;
use Models\Subcategory;
use Helpers\Url;

class ProductController {
	public $productModels;

	public function __construct() {
		$this->productModels = new Product;
	}

	public function select() {
		$data = $this->productModels->read('item');
		require_once(__DIR__.'\../view/products.php');
	}

	public function create() {
		$sctgModels = new Subcategory;
		$subcategory = $sctgModels->read('subcategory');
		require_once(__DIR__.'\../view/createProduct.php');
	}

	public function edit($id) { 
		$sctgModels = new Subcategory;
		$subcategory = $sctgModels->read('subcategory');
		$product = $this->productModels->getById('item', $id);
		require_once(__DIR__.'\../view/editProduct.php');
	}

	public function update($id) {
		$err = [];
		if (isset($_POST['update'])) {

			if ($_POST['title'] == '') {
				array_push($err, [
					'field' => 'title',
			    	'error' => '!Title is required'
			    ]);
			}

			if ($_POST['price'] == '') {
				array_push($err, [
					'field' => 'price',
			    	'error' => '!Price is required'
			    ]);
			}

			if ($_POST['cost'] == '') {
				array_push($err, [
					'field' => 'cost',
			    	'error' => '!Cost is required'
			    ]);
			}
		} 
		unset($_POST['update']);

		if ($err == []) {
			$this->productModels->update('item', $_POST, $id);
			header('Location: '.Url::getBaseUrl('product/select') );
		} else {
			$_SESSION['error'] = $err;
			header('Location: '.Url::getBaseUrl('product/edit/'.$id) );
		}
	}

	public function delete($id) {
		$product = $this->productModels->getById('item', $id);
		if ($product != []) {
			$this->productModels->delete('item', $id);
			header('Location: '.Url::getBaseUrl('product/select') );
		} else {
			$_SESSION['error'] = ['field' => 'delete', 'err' => '!This product does not exist.'];
			header('Location: '.Url::getBaseUrl('product/select') );
		}
		
	}

	public function detail() {
		$this->productModels->detail($id);
		// need to require view
	}

	public function insert() {
		$_SESSION['error'] = [];
		if (isset($_POST['add'])) {

			if ($_POST['title'] == '') {
				array_push($_SESSION['error'], [
					'field' => 'title',
			    	'error' => '!Title is required'
			    ]);
			}

			if ($_POST['price'] == '') {
				array_push($_SESSION['error'], [
					'field' => 'price',
			    	'error' => '!Price is required'
			    ]);
			}

			if ($_POST['cost'] == '') {
				array_push($_SESSION['error'], [
					'field' => 'cost',
			    	'error' => '!Cost is required'
			    ]);
			}
		} 
		unset($_POST['add']);

		if ($_SESSION['error'] == []) {
			$this->productModels->insert('item', $_POST);
			header('Location: '.Url::getBaseUrl('product/select') );
		} else {
			header('Location: '.Url::getBaseUrl('product/create') );
		}
	}
}