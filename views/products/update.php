<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Update Product</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<form action="<?= BASE_URL . "product/save-update"?>" method="post">
			<div class="col-6">
				<input type="hidden" name="id" value="<?= $product['id']; ?>">
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" value="<?= $product['name']?>" class="form-control" >
				</div>
				<div class="form-group">
					<label>Price</label>
					<input type="text" name="price" value="<?= $product['price']?>" class="form-control" >
				</div>
				<div class="form-group">
					<label>Quantity</label>
					<input type="text" name="name" value="<?= $product['quantity']?>" class="form-control" >
				</div>
				<button class="btn btn-primary">Update</button>
			</div>
		</div>
	</div>
</body>
</html>