<?php
use Helpers\Url;
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1>Available Products</h1>
	<?php foreach ($data as $product): ?>
		<div id="proDiv">
			<div id="proHeadDiv">
				<div id="proTitleDiv"><h2><?php echo $product['title']; ?></h2></div>
				<div id="proEditDelete">
					<a href="<?php echo Url::getBaseUrl('product/edit/'.$product['id']); ?>"><button name="edit">edit</button></a>
					<a href="<?php echo Url::getBaseUrl('product/delete/'.$product['id']); ?>"><button name="delete">delete</button></a>
				</div>
			</div>
			<div id="proFootDiv">
				<span><?php echo $product['price']; ?> Ks</span>
				<button>Add to Cart</button>
			</div>
		</div>
	<?php endforeach; ?>
</body>
</html>