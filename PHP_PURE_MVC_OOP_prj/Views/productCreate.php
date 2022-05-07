<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Product create</title>
</head>
<body>
	<h1>Product Create</h1>
	<form style="border: 1px solid black; padding: 20px;" action="" method="POST" enctype="multipart/form-data">
		Title <br>
		<input type="text" name="title"> <br> <br>
		Sub Category <br> 
		<select name="subcategory_id">
			 <?php foreach ($subcategories as $key): ?>
				<option value='<?php echo $key['id']; ?>'><?php echo $key['title']; ?></option>
			<?php endforeach ?>
		</select> <br> <br>
		Photo : <input type="file" name="photo"> <br> <br>
		Price : <input style="width: 80px;" type="number" name="price"> 
		Cost : <input style="width: 80px;" type="number" name="cost"> <br>
		<button name="add">Add</button>
	</form>

	</form>
</body>
</html>