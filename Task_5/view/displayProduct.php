<?php
require_once '../controller/productInfo.php';

$products = fetchAllProducts();
include "navigation.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<fieldset>	
	<legend>DISPLAY</legend>
		<table style="border: 1px;">
				<thead>
					<tr>
						<th>Name</th>
						<th>Profit</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($products as $i => $product): ?>
						<tr>
							<td><a href="product.php?id=<?php $product['ID']?>"><?php echo $product['Name']?></a></td>
							<td><?php echo $var = $product['SellingPrice'] - $product['BuyingPrice'];?></td>
							<td><a href="editProduct.php?id=<?php echo $product['ID']?>">Edit</a>&nbsp&nbsp<a href="../controller/deleteProduct.php?id=<?php echo $product['ID']?>"onclick=" return confirm('Are you sure about this?')">Delete</a></td>
						</tr>
					<?php endforeach;?>
				</tbody>
		</table>
</fieldset>
</body>
</html>