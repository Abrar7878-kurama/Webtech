<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<form action="../controller/addProducts.php" method="POST">
	<?php include "navigation.php";?>

<fieldset>
	<legend>ADD PRODUCT</legend>
	
		
		<label for="name">Name</label><br>
		<input type="text" id="name" name="name"><br>
		<label for="bprice">Buying Price</label><br>
		<input type="text" id="bprice" name="bprice"><br>
		<label for="sprice">Selling Price</label><br>
		<input type="text" id="sprice" name="sprice"><br>
		<hr>
		<input type="checkbox" id="display" name="display">Display<br>
		<hr>
		<input type="submit" name="save" value="Save">
	
</fieldset>
</form>
</body>
</html>