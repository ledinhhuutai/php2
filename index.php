<?php 

require __DIR__ . '/vendor/autoload.php';

use App\Controllers\HomeController;
use App\Controllers\ProductController;

const BASE_URL = "http://localhost/php2/";

$url = isset($_GET['url']) ? $_GET['url'] : "/";

switch ($url) {
	case '/':
		$ctr = new HomeController();
		echo $ctr->index();
		break;
	case 'product':
		$ctr = new ProductController();
		echo $ctr->index();
		break;
	case 'product/create':
		$ctr = new ProductController();
		echo $ctr->create();
		break;
	case 'product/save-create':
		$ctr = new ProductController();
		echo $ctr->saveCreate();
		break;
	case 'product/update': 
		$ctr = new ProductController();
		echo $ctr->update();
		break;	
	default:
		echo "404 Not Found";
		break;
}