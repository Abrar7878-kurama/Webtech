

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
    

    <link rel="stylesheet" href="SStyle.css">
</head>
<body>
  
<nav class="navbar navbar-expand-sm navbar-dark bg-dark ">
    <a href="#" class="navbar-brand"> @Coffee </a>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="1home.php" class="nav-link "> Home </a></li>
        <li class="nav-item"><a href="login.php" class="nav-link "> Login </a></li>
        <li class="nav-item"><a href="registration.php" class="nav-link "> Registration </a></li>

  

     
    </ul>
   

</nav>

    
    <div>

    <section class="registration_holder1 d-flex justify-content-center align-items-center">
        <form class="registration_form p-5" action= "" method="POST" onsubmit="return regValidateForm()">
            <h2>Please Registration</h2>
            <div class="form-group">
              <label for="">Username</label>
              <input type="text" class="form-control" id="RIusername" type="text" name="username"  placeholder="Username">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="RIpassword" type="password" name="password"  placeholder="Password">
            </div>
           
            <div class="form-group">
              <label for="confirmpassword"> Confirm Password</label>
              <input type="password" class="form-control" id="CRIpassword" type="password" name="confirmPassword"  placeholder="Confirm Password">
            </div>

            <div class="form-group">
              <label for="email">  Email</label>
              <input type="text" class="form-control" id="ERIpassword" type="text" name="email"  placeholder="Enter Email">
            </div>

            <div class="form-group">
              <label for="phonenumber">  Phone Number</label>
              <input type="text" class="form-control" id="PRIpassword" type="text" name="phoneNumber"  placeholder="Enter phonenumber">
            </div>

            <div>

            <label id="RLRadio" for="">Gender &nbsp;</label>

<input  type="radio" name="gender" value="male">
<label id="RLRadio1" for="">Male</label>

<input  type="radio" name="gender" value="female">
<label id="RLRadio2" for="">Female</label>

<input  type="radio" name="gender"  value="other">
<label id="RLRadio3" for="">Other</label> <br><br>





<label id="RLRadioType" for="">Register as &nbsp;</label>

<input type="radio" name="userType" value="Admin" >
<label id="RLRadioType1" for="">Admin</label>

<input type="radio" name="userType"  value="Customer">
<label id="RLRadioType2" for="">Customer</label> 

<input type="radio" name="userType"  value="User">
<label id="RLRadioType3" for="">User</label> 



            </div>

           
            <button type="submit" class="btn btn-success mt-1" id="Rsubmit" name="done">Submit</button>
            </form>
            <script src="validation.js"></script>

</section>

            


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>