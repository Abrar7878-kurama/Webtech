<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php include "navigation.php";?>
<form action="../controller/find.php" method="POST">
	<fieldset>
		<legend>SEARCH</legend>
		<input type="text" name="product_name">
		<input type="submit" name="find" value="Search"><br>

		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($allSearchProducts as $i => $product): ?>
					<tr>
						<td><a href="../product.php?id=<?php echo $product['ID']?>"><?php echo $product['ID']?></a></td>
						<td><?php echo $product['Name']?></td>
						<td><a href="../editProduct.php?id=<?php echo $product['ID']?>">Edit</a>&nbsp<a href="deleteProduct.php?id=<?php echo $product['ID']?>">Delete</a></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</fieldset>
</form>
</body>
</html>