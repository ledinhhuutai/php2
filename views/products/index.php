<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Products</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<table class="table">
			<thead>
				<th>#</th>
				<th scope="col">Name</th>
				<th scope="col">Price</th>
				<th scope="col">Image</th>
				<th scope="col">Quantity</th>
			</thead>
			<tbody>
			<?php foreach ($products as $p): ?>
				<tr>
					<th scope="row"></th>
				      <td><?= $p['name']; ?></td>
				      <td><?= $p['price'];?></td>
				      <td><img src="<?= $p['image'];?>" class="img-thumbnail"></td>
				      <td><?= $p['quantity'];?></td>
				</tr>
			<?php endforeach ?>
			</tbody>
		</table>
	</div>
</body>
</html>
