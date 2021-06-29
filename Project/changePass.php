<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Change Password</title>
</head>
<body>
	<fieldset>
		<?php
		session_start();
		include "header.php";
		$pass_Err = "";
		
		$data = file_get_contents('data.json');
		$data = json_decode($data, true);
		
		if($_SERVER['REQUEST_METHOD'] == "POST")
		{
			if(isset($_POST['submit']))
			{
				$data = file_get_contents('data.json');
				$data = json_decode($data, true);

						foreach ($data as $row) 
						{
							if($_POST['pass'] == $_POST['currpass'] && $_POST['pass'] != $_SESSION['pass'])
						{
							if($row['username'] == $_SESSION['uname'])
							$row['password'] = $_POST['pass'];
							echo 'Success!!';
						}
						else{$pass_Err = "You type the existing password or New password and Confirm new password missmatched!!!";}	
						}
						
				}
				file_put_contents('data.json', json_encode($data));
			}
		?>
	</fieldset>
	<table>
		<td>
		<fieldset style="height: 300px; width: 300px;">
			<h3>Account</h3><br>
			<hr>
			<ul>
				<li><a href="dashboard.php">Dashboard</a></li>
				<li><a href="profile.php">View Profile</a></li>
				<li><a href="editProfile.php">Edit Profile</a></li>
				<li><a href="changeProfilePic.php">Change Profile Picture</a></li>
				<li><a href="changePass.php">Change Password</a></li>
				<li><a href="aboutUs.php">About Us</a></li>
				<li><a href="addCategory.php">Add Product</a></li>
				<li><a href="aboutUs.php">About Us</a></li>
				<li><a href="contractUs.php">Contact Us</a></li>
				<li><a href="menu.php">Menu</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</fieldset>
	</td>
	<td>
		<fieldset style="height: 300px;">
			<fieldset>
				<form method="post">
					<legend>CHANGE PASSWORD</legend>
					<table>
						<tr>
							<td>Current Password :</td>
							<td><input type="password" name="currpass" value="<?php echo $_SESSION['pass'];?>"><?php echo $pass_Err;?></td><br>
						</tr>
						
						<tr>
							<td><span style="color: green;">New Password :</span></td>
							<td><input type="password" name="pass"></td><br>
						</tr>

						<tr>
							<td><span style="color: red;">Confirm New Password :</span></td>
							<td><input type="password" name="cpass"></td>
						</tr>
					</table>
					<br>
					<hr>
					<input type="submit" name="submit">
				</form>
			</fieldset>
		</fieldset>
	</td>
	</table>
	<fieldset>
		<?php
		include "footer.php"; 
		?>
	</fieldset>
</body>
</html>