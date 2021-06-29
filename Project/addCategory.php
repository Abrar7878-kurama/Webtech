<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add Category</title>
	<style>
		.error{color: red;}
	</style>
</head>
<body>
	<fieldset>
		<?php
			session_start();
			include 'header.php'; 
		?>
	</fieldset>
	<?php
	$message = '';
	$coff_Err = $type_Err = $size_Err = $add_Err = $price_Err = '';

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		if(isset($_POST['submit']))
		{
			if(empty($_POST['coffname']))
			{
				$coff_Err = "Coffee name is requird";
			}

			if(!isset($_POST['cofftype']))
			{
				$type_Err = "Coffee type can't be empty";
			}

			if(!isset($_POST['coffsize']))
			{
				$size_Err = "Coffee size can't be empty";
			}
			if(empty($_POST['price']))
			{
				$price_Err = "Price can't be empty!!";
			}
			
			else
			{
				if(file_exists('category.json'))
				{
					$current_data = file_get_contents('category.json');
					$array_data = json_decode($current_data, true);
					$extra = array(
									'coffee' => $_POST['coffname'],
									'type' => $_POST['cofftype'],
									'size' => $_POST['coffsize'],
									'add-in' => $_POST['addOn'],
									'price' => $_POST['price']
									);
					$array_data[] = $extra;
					$final_data = json_encode($array_data);
					if(file_put_contents('category.json', $final_data))
					{
						$message = "Menu updated successfully!!";
					}
				}
				else
				{
					$error = 'JSON file does not exist';
				}
			}
		}
	}
	?>
	<fieldset>
		<form method="post" action="">
			<fieldset>
				<legend>Add Category</legend>
				<table>
					<tr>
						<td>Coffee Name :</td>
						<td><input type="text" name="coffname" class="form-control"><span class="error"><?php echo $coff_Err;?></span>
							<br></td>
		
					</tr>

					<tr>
						<td>Coffee Type :</td>
						<td><input type="radio" name="cofftype" value="expresso">Expresso<br></td>
						<td><input type="radio" name="cofftype" value="cappuccino">Cappuccino<br></td>
						<td><input type="radio" name="cofftype" value="latte">Latte<br></td>
						<td><input type="radio" name="cofftype" value="americano">Americano<br></td>
						<td><input type="radio" name="cofftype" value="mochas">Mochas<br></td>
						<span class="error"><?php echo $type_Err;?></span>
					</tr>

					<tr>
						<td>Sizes :</td>
						<td><input type="radio" name="coffsize" value="short">Short (8 fl oz)
							<br></td>
						<td><input type="radio" name="coffsize" value="tall">Tall (12 fl oz)
							<br></td>
						<td><input type="radio" name="coffsize" value="grande">Grande (16 fl oz)
							<br></td>
						<span class="error"><?php echo $size_Err;?></span>
					</tr>

					<tr>
						<td>Add Ons :</td>
						<td><input type="radio" name="addOn" value="milk">Milk<br></td>
						<td><input type="radio" name="addOn" value="creame">Creame<br></td>
						<td><input type="radio" name="addOn" value="none">None<br></td>
						<span class="error"><?php echo $add_Err;?></span>
					</tr>
					<td>Price :</td>
					<td><input type="number" name="price" class="form-control">BDT &nbsp &nbsp<span class="error"><?php echo $price_Err;?></span></td><br>
				</table>
				<input type="submit" name="submit"> &nbsp &nbsp&nbsp&nbsp&nbsp
				<a href="dashboard.php">Dashboard</a>
			</fieldset>
		</form>
		<?php echo $message;?>
	</fieldset>
	<fieldset>
		<?php include 'footer.php';?>
	</fieldset>
</body>
</html>