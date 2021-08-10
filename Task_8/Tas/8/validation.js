function regValidateForm()
{
    var uname = document.getElementById("RIusername").value;
    var pass = document.getElementById("RIpassword").value;
    var cpass = document.getElementById("CRIpassword").value;
    var email = document.getElementById("ERIpassword").value;
    var phone = document.getElementById("PRIpassword").value;
    
    

    if (uname == "" || pass == "" || cpass == "" || email == "" || phone == "" ) {
      alert("Pleas fill up all the fields");
      return false;
    }
    else if (uname == null || pass == null || cpass == null || email == null || phone == null )
    {
      alert("Pleas fill up all the fields");
      return false; 
    }
}

function loginValidateForm()
{
    var lname = document.getElementById("Iusername").value;
    var lpass = document.getElementById("Ipassword").value;
    var check = document.getElementById("exampleCheck1").value;


    if (lname=="" || lpass == "") {
      alert("Pleas fill up all the fields");
      return false;
    }
    else if (lname==null || lpass == null )
    {
      alert("Pleas fill up all the fields");
      return false; 
    }
}

function contactValidate()
{
    var name = document.getElementById("name").value;
    var sub = document.getElementById("sub").value;
    var email = document.getElementById("email").value;
    var mess = document.getElementById("mess").value;


    if (name=="" || sub == "" || email == "" || mess == "") {
      alert("Pleas fill up all the fields");
      return false;
    }
    else if (name==null || sub == null || email == null || mess == null )
    {
      alert("Pleas fill up all the fields");
      return false; 
    }
}


