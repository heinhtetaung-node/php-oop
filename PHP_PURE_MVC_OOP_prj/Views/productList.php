<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Product List</title>
</head>
<body>
	<h1>Products</h1>

	<?php foreach($datas as $key => $pro) : ?>

		<div style="background: #f7f7f7; padding: 20px; margin: 10px;">
			<h2><?php echo $pro['title']; ?></h2>
			<b><?php echo $pro['price']; ?></b>
			<button>Add to Cart</button>
		</div>

	<?php endforeach; ?>
</body>
</html>