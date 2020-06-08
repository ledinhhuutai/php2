<?php

namespace App\Controllers;

use App\Models\Product;

class ProductController {

	public function index () {
		$products = Product::all();
		include './views/products/index.php';
	}

	public function create () {
		include './views/products/create.php';

	}

	public function find() {
		$model = Product::find(1);
	}
}