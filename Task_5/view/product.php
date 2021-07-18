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
<table>
	<tr>
		<th>Name</th>
		<th>Buying Price</th>
		<th>Selling Price</th>
	</tr>
	<tr>
		<td><a href="product.php?id=<?php echo $product['ID']?>"><?php echo $product['Name']?></a></td>
		<td><?php echo $product['BuyingPrice']?></td>
		<td><?php echo $product['SellingPrice']?></td>
	</tr>
</table>
</body>
</html>