<?php
 
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["name"]))  
      {  
           echo "Enter Name";  
      }
      else if(empty($_POST["email"]))  
      {  
           echo "Enter an e-mail";  
      }  
      else if(empty($_POST["userName"]))  
      {  
           echo "Enter a username";  
      }  
      else if(empty($_POST["password"]))  
      {  
           echo "Enter a password";  
      }
      else if(empty($_POST["cPassword"]))  
      {  
          echo "Confirm password field cannot be empty";  
      } 
      else if(empty($_POST["gender"]))  
      {  
           echo "Gender cannot be empty";  
      } 
      else if(empty($_POST["dob"]))
      {
      		echo "Date Of Birth  can't be empty"; 
      }
      

      else  
      {  
           if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name' =>     $_POST['name'],  
                     'e-mail' =>     $_POST["email"],  
                     'username' =>     $_POST["username"],  
                     'gender' =>     $_POST["gender"], 
                     'password' =>  $_POST["password"],
                     'dob' =>     $_POST["dob"]
                    );

                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('data.json', $final_data))  
                {  
                     echo "File has stored successfully";  
                }  
           }  
           else  
           {  
                echo "JSON file does not exits";  
           }  
      }  
 }  
?>  	


<!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION</title>
</head>
<body>

	<form method="POST">
		<fieldset>
			<legend> <b>REGISTRATION</b></legend>
				<table>
					<tr>
						<td> Name </td>
						<td> :<input type="text" name="name"/> 
						<br/> </td>
					</tr>
					<tr>
						<td> Email </td>
						<td> :<input type="email" name="email"/> 
						<br/> </td>
					</tr>
					<tr>
						<td> User Name </td>
						<td> :<input type="username" name="userName"/> 
						<br/> </td>
					</tr>
					<tr>
						<td> Password </td>
						<td> :<input type="password" name="password"/> 
						<br/> </td>
					</tr>
					<tr>
						<td> Confirm Password </td>
						<td> :<input type="password" name="cPassword"/> 
						<br/> </td>
					</tr>
			</table>
				<fieldset>
					<legend>Gender</legend>
					    <input type='radio' name='gender' value='Male'>Male
            			<input type='radio' name='gender' value='Female'>Female
            			<input type='radio' name='gender' value='Others'>Others
				</fieldset>
				<fieldset>
					<legend>Date Of Birth</legend>
							<input type="date" name="dob"> 
					</fieldset>
			<hr>

			<input type="submit" name="submit" value="Submit">
			<input type="reset" name="Reset" value="Reset">
		</fieldset>
	</form>
</body>
</html>