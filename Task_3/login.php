<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>login</title>
</head>
<body>
<?php

$username = $password= "";
$nameErr = $passwordErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	if (empty($_POST["username"])) 
	{
		$nameErr = "User Name is required";
	}

	else
	 {
		$username = $_POST["username"];
		
		if (!preg_match("/^[a-zA-Z-' ]*$/",$username))
	 	{
	 		$nameErr = "Only letters and white space allowed";
			$name="";
		}
		
		else if (strlen($username) < 2)
		{
			$nameErr = "At least two words requided";
			$username="";
		}
	}

	if (empty($_POST["password"])) 
	{
		$passwordErr = "Password required";
	}

	else
	{
		$password = $_POST["password"];

		if (strlen($password) <8)
		 {
			$passwordErr = "Password must be over 8 charecter";
			$password = "";

		 }

		 else
		 {
		 	if(!preg_match('/[@#$%]/', $password))
		 	{
		 		$passwordErr = "Password must contains (@, #, $, %)";
		 		$password = "";
		 	}
		 	else
		 	{
		 		echo "Login Successful !!!";

		 	}

		 } 
	}
}

?>


	<form action="login.php" method="post">
		<fieldset style="width: 300px;">
			<legend><b>LOGIN</b></legend>
			<table>

			<tr>
				<td>User Name :</td>
				<td><input type="text" name="username"></td>
				<span style="color: red"><?php echo $nameErr;?></span>
			</tr>

			<tr>
				<td>Password :</td>
				<td><input type="password" name="password"></td>
				<span style="color: red"><?php echo $passwordErr;?></span>
			</tr>

			</table>
			<hr>
			<input type="submit" name="submit" value="Submit"><a href="changePassword.php">Forgot Password?</a></td>
			

			
		</fieldset>

		
	</form>
</body>
</html>