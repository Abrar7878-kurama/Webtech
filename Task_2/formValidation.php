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

	if(!empty($_POST['degree']))
	{
    	if (sizeof($_POST["degree"]) < 2)
    	{
    		$degreeErr="Please select at least two degrees";
    	}
    	else
    	{
    		$degreeErr="";
    		$degree=$_POST['degree'];
    	}
  	}
  	else 
  		{
  			$degreeErr="Please select at least two fields";
  		} 

   if (($_POST['blood'])=="")
   {
    $bloodErr="Blood group is requied";
   } 
  else 
  {
    $bloodErr="";
    $blood=$_POST['blood'];
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
 	<input type="checkbox" name="degree[0]" value="SSC" <?php if(isset($_POST['degree'][0])) echo "checked"; ?> >SSC 
  	<input type="checkbox" name="degree[1]" value="HSC" <?php if(isset($_POST['degree'][1])) echo "checked"; ?> >HSC 
  	<input type="checkbox" name="degree[2]" value="BSc" <?php if(isset($_POST['degree'][2])) echo "checked"; ?> >BSc 
  	<input type="checkbox" name="degree[3]" value="MSc" <?php if(isset($_POST['degree'][3])) echo "checked"; ?> >MSc
  	<span class="error">* <?php echo $degreeErr;?></span>
 	<hr>

 	<legend>BLOOD GROUP </legend>
 	<select name="blood"> 
		<option value=""></option>
    	<option value="A+" <?php if($blood == 'A+'){ echo ' selected="selected"'; } ?> >A+</option>
    	<option value="B+" <?php if($blood == 'B+'){ echo ' selected="selected"'; } ?> >B+</option>
    	<option value="O+" <?php if($blood == 'O+'){ echo ' selected="selected"'; } ?> >O+</option>
    	<option value="A-" <?php if($blood == 'A-'){ echo ' selected="selected"'; } ?> >A-</option>
    	<option value="B-" <?php if($blood == 'B-'){ echo ' selected="selected"'; } ?> >B-</option>
    	<option value="O-" <?php if($blood == 'O-'){ echo ' selected="selected"'; } ?> >O-</option>
    	<option value="AB+" <?php if($blood == 'AB+'){ echo ' selected="selected"'; } ?> >AB+</option>
    	<option value="AB-" <?php if($blood == 'AB-'){ echo ' selected="selected"'; } ?> >AB-</option>
	</select>
	<span class="error">* <?php echo $bloodErr;?></span>
 	<hr>

 	<input type="submit">

 </fieldset>	
</form>

</body>
</html>