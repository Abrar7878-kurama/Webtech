function isValid() {
	var firstname = document.forms["registration-form"]["firstname"].value;
	var lastname = document.forms["registration-form"]["lastname"].value;
	var gender = document.forms["registration-form"]["gender"].value;
	var dob = document.forms["registration-form"]["dob"].value;
	var religion = document.forms["registration-form"]["religion"].value;
	var email = document.forms["registration-form"]["email"].value;
	var username = document.forms["registration-form"]["username"].value;
	var password = document.forms["registration-form"]["password"].value;
	var flag = false;

	if(firstname === "") {
		document.getElementById('firstNameErr').innerHTML = "First name can not be empty.";
		flag = true;
	} 
	if (lastname === "") {
		document.getElementById('lastNameErr').innerHTML = "Last name can not be empty.";
		flag = true;
	}
	if (gender === "") {
		document.getElementById('genderErr').innerHTML = "Gender can not be empty.";
		flag = true;
	}
	if (dob === "") {
		document.getElementById('dobErr').innerHTML = "Dob can not be empty.";
		flag = true;
	}
	if (religion === "") {
		document.getElementById('religionErr').innerHTML = "Religion can not be empty.";
		flag = true;
	}
	if (email === "") {
		document.getElementById('emailErr').innerHTML = "Email can not be empty.";
		flag = true;
	}
	if (username === "") {
		document.getElementById('usernameErr').innerHTML = "Username can not be empty.";
		flag = true;
	}
	if (password === "") {
		document.getElementById('passwordErr').innerHTML = "Password can not be empty.";
		flag = true;
	}



	if(flag == true) {
		return false;
	}
	else
		return true;
}