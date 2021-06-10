<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>formValidation</title>
	<style>.error {color: red;}</style>
</head>
<body>

<?php
$nameErr = $emailErr = $dobErr = $genderErr = $degreeErr = $bloodErr = "";
$name = $email = $dob = $gender = $degree = $blood = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	if (empty($_POST["name"])) 
	{
		$nameErr = "Name is required";
	}
	
	else
	 {
		$name = test_input($_POST["name"]);
		if (!preg_match("/^[a-zA-Z-' ]*$/",$name))
	 	{
	 		$nameErr = "Only letters and white space allowed";
			$name="";
		}
		
		else if (str_word_count($name) < 2)
		{
			$nameErr = "At least two words requided";
			$name="";
		}
	}
	
	if (empty($_POST["email"])) 
	{
    	$emailErr = "Email is required";
	}
	else
	{
		$email = test_input($_POST["email"]);

		if (!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$emailErr = "Invalid email format";
			$email ="";
		}
	}

	if (empty($_POST["dob"])) 
	{
    	$dobErr = "Date is required";
	}
	else
	{
		$dob = test_input($_POST["dob"]);

		if ($dob < date(01/01/1953) || $dob > date(12/31/1995))
		{
			$dob = "Invalid date of birth";
			$dob ="";
		}
	}

	if (empty($_POST["gender"]))
	{
		$genderErr = "Gender is required";
	}
	else
	{
		$gender = test_input($_POST["gender"]);
	}

	if (empty($_POST["degree"]))
	{
		$degreeErr = "Degree is required";
	}
	else
	{
		$degree = test_input($_POST["degree"]);
		if(!count($_POST["degree"] < 2))
		{
			$degreeErr = "Please select atleast two";
			$degree = "";
		}
	}

	if (empty($_POST["blood"]))
	{
		$bloodErr = "Blood group is required.";
	}
	else
	{
		$blood = test_input($_POST["blood"]);
	}

}





function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
 <fieldset>
 	<legend>NAME</legend>
 	<input type="text" name="name" value="<?php echo $name;?>">
 	<span class="error">* <?php echo $nameErr;?></span>
 	<hr>
 	
 	<legend>EMAIL</legend>
 	<input type="text" name="email" value="<?php echo $email;?>">i
 	<span class="error">* <?php echo $emailErr;?></span>
 	<hr>

 	<legend>DATE OF BIRTH</legend>
 	<input type="date" name="dob" value="<?php echo $dob;?>">
 	<span class="error">* <?php echo $dobErr;?></span>
 	<hr>

 	<legend>GENDER</legend>
 	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male" value="male">Male
 	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
 	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other
 	<span class="error">* <?php echo $genderErr;?></span>
 	<hr>

 	<legend>DEGREE </legend>
 	<input type="checkbox" name="degree[]" <?php if (isset($degree) && $degree=="ssc") echo "checked";?> value="ssc">SSC
 	<input type="checkbox" name="degree[]" <?php if (isset($degree) && $degree=="hsc") echo "checked";?> value="hsc">HSC
 	<input type="checkbox" name="degree[]" <?php if (isset($degree) && $degree=="bsc") echo "checked";?> value="bsc">BSc
 	<input type="checkbox" name="degree[]" <?php if (isset($degree) && $degree=="msc") echo "checked";?> value="msc">MSc
 	<span class="error">* <?php echo $degreeErr;?></span>
 	<hr>

 	<legend>BLOOD GROUP </legend>
 	<select name="blood"> 
		<option value="A+">A+</option>
		<option value="B+">B+</option>
		<option value="AB+">AB+</option>
		<option value="O+">AB+</option>
		<option value="A+">A-</option>
		<option value="B+">B-</option>
		<option value="AB+">AB-</option>
		<option value="O+">AB-</option>
	</select>
	<span class="error">* <?php echo $bloodErr;?></span>
 	<hr>

 	<input type="submit">

 </fieldset>	
</form>

</body>
</html>