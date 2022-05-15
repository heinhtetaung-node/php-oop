<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h2>Edit Product</h2>
	<?php if (isset($_SESSION['error'])) { ?>
		<?php foreach ($_SESSION['error'] as $e): ?>
			<p style="color: red;"><?php echo $e['error']; ?></p>
		<?php endforeach; ?>
		<?php unset($_SESSION['error']); ?>
	<?php } ?>
	<form style="border: 1px solid black; padding: 20px;" action="../update/<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
		Title <br>
		<input type="text" name="title" value="<?php echo $product['title']; ?>"> <br> <br>
		Subcategory <br> 
		<select name="subcategory_id">
			<?php foreach ($subcategory as $key): ?>
				<option <?php if ($key['id'] == $product['subcategory_id']) {echo 'selected';} ?> value="<?php echo $key['id']; ?>"><?php echo $key['title']; ?></option>
			<?php endforeach ?>
		</select> <br> <br>
		Photo : <input type="file" name="photo"> <br> <br>
		Price : <input style="width: 80px;" type="number" name="price" value="<?php echo $product['price'] ?>"> 
		Cost : <input style="width: 80px;" type="number" name="cost" value="<?php echo $product['cost'] ?>"> <br>
		<button name="update">Update</button>
	</form>
</body>
</html>