<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Menu</title>
</head>
<body style="background-image: url(1.jpg);">
<fieldset>
	<?php
		session_start();
		include 'header.php'; 
	?>
</fieldset>
<fieldset>
	<legend>Menu</legend>
	<table border="1px">
		<tr>
			<th>Coffe Name</th>
			<th>Coffe Type</th>
			<th>Size</th>
			<th>Add Ons</th>
			<th>Price</th>
		</tr>

		<?php
			$data = file_get_contents('category.json');
			$data = json_decode($data, true);

			foreach ($data as $row)
			{
				echo '<tr>
				<td>'.$row['coffee'].'</td>
				<td>'.$row['type'].'</td>
				<td>'.$row['size'].'</td>
				<td>'.$row['add-in'].'</td>
				<td>'.$row['price'].'</td>
				</tr>';
			}
		?>
	</table>
</fieldset>
</body>
</html>