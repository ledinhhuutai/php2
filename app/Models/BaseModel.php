<?php

namespace App\Models;

use PDO;

class BaseModel {

	public function __construct () {
		$this->conn = new PDO("mysql:host=localhost; dbname=php2; charset=utf8", "root", "123456");
	}

	public static function all () {
		$model = new static;
		$query = "select * from " . $model->table ;
		$stmt = $model->conn->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public static function find($id){
        $model = new static();
        $query = "select * from " . $model->table . " where id = '$id'";
        // var_dump($query);
        $stmt = $model->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetch();
	}
     

}