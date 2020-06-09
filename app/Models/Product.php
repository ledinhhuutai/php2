<?php 

namespace App\Models;

use App\Models\BaseModel;

class Product extends BaseModel {

	public $table = "products";

	public $fillable = ['name', 'price', 'quantity'];
}