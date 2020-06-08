<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php foreach ($products as $pr): ?>
		<p><?= $pr['name']; ?></p>
	<?php endforeach ?>
</body>
</html>