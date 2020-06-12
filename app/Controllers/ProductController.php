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

	public function saveCreate() {
		$col = "";
		$model = new Product();

		$name = $_POST['name'];
		$price = $_POST['price'];
		$quantity = $_POST['quantity'];

		foreach ($model->fillable as $fill) {
			$col .= "$fill, ";

		}
		
		$col = rtrim($col, ", ");
		$query = "INSERT INTO " . $model->table .  " ($col)" . " VALUES " . "('$name', $price, $quantity)";
		$stmt = $model->conn->prepare($query);
		$stmt->execute();
		header('location:' . BASE_URL . "product");
	}

	public function update () {
		$id = $_GET['id'];
		$product = Product::find($id);
		include './views/products/update.php';
	}

	public function saveUpdate () {
		$col = "";
		$model = Product::find($_POST['id']);
		var_dump($model);
		die;

		$name = $_POST['name'];
		$price = $_POST['price'];
		$quantity = $_POST['quantity'];

		foreach ($model->fillable as $fill) {
			$col .= "$fill, ";

		}
		
		$col = rtrim($col, ", ");
		$query = "update " . $model->table . "SET"  . ("$col") . "where id = $model->id";
		var_dump($query);
		die;

	}
}