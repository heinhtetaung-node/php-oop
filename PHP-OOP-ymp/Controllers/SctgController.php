<?php

namespace Controllers;

use Models\Subcategory;

class SctgController {
	public $SctgModels;

	public function __construct() {
		$this->SctgModels = new Subcategory;
	}

	public function select() {
		$data = $this->SctgModels->read('item');
		require_once(__DIR__.'\../view/.php');
	

	public function create() {
		require_once(__DIR__.'\../view/.php');
	}

	public function edit() {
		unset($data['edit']);
		$this->SctgModels->update('item', $data, $id);
	}

	public function delete() {
		unset($data['delete']);
		$this->SctgModels->delete('item', $id);
	}

	public function detail() {
		$this->SctgController->detail($id);
	}
}