<?php
use Helpers\Url;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h2>Create Subcategory</h2>
	<?php if (isset($_SESSION['error'])) { ?>
		<?php foreach ($_SESSION['error'] as $e): ?>
			<p style="color: red;"><?php echo $e['error']; ?></p>
		<?php endforeach; ?>
	<?php unset($_SESSION['error']); ?>
	<?php } ?>
	<form style="border: 1px solid black; padding: 20px;" action="<?php echo Url::getBaseUrl('product/insert'); ?>" method="POST" enctype="multipart/form-data">
		Title <br>
		<input type="text" name="title"> <br> <br>
		Subcategory <br> 
		<select name="subcategory_id">
			<?php foreach ($subcategory as $key): ?>
				<option value='<?php echo $key['id']; ?>'><?php echo $key['title']; ?></option>
			<?php endforeach ?>
		</select> <br> <br>
		Photo : <input type="file" name="photo"> <br> <br>
		Price : <input style="width: 80px;" type="number" name="price"> 
		Cost : <input style="width: 80px;" type="number" name="cost"> <br>
		<button name="add">Add</button>
	</form>
</body>
</html>