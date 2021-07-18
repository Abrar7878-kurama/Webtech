<?php
require_once '../controller/productInfo.php';
$product = fetchProduct($_GET['id']);

include "navigation.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<form action="../controller/updateProduct.php" method="POST">
	<fieldset>
		<legend>Edit Product</legend>
		<label for="name">Name</label><br>
		<input type="text" id="name" name="name" value="<?php echo $product['Name']?>"><br>
		<label for="bprice">Byuing Price</label><br>
		<input type="text" name="bprice" id="bprice" value="<?php echo $product['BuyingPrice']?>"><br>
		<label for="sprice">Selling Price</label>
		<input type="text" name="sprice" id="sprice" value="<?php echo $product['SellingPrice']?>"><br><hr>
		<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
		<input type="checkbox" name="display" id="display">Display<br><hr>
		<input type="submit" name="save" value="Save">

	</fieldset>
</form>
</body>
</html>