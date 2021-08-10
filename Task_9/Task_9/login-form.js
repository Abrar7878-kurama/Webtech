function isValid() {
	var username = document.forms["login-form"]["username"].value;
	var password = document.forms["login-form"]["password"].value;
	var flag = false;

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