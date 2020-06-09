<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create new product</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<form action="<?= BASE_URL . "product/save-create"; ?>" method="post" enctype="multipart/form-data">
			<div class="col-6">
				<div class="form-group">
				<label>Name</label>
					<input type="text" name="name" class="form-control">
				</div>
				<div class="form-group">
					<label>Price</label>
					<input type="text" name="price" class="form-control">
				</div>
				<div class="form-group">
					<label>Quantity</label>
					<input type="text" name="quantity" class="form-control">
				</div>
				<div class="form-group">
					<label>Image</label>
					<input type="file" name="image">
				</div>
			</div>
			<button class="btn btn-primary">Create</button>
		</form>
	</div>
</body>
</html>