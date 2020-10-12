function validateForm() {
  var username = document.forms["myForm"]["Username"].value;
  var email = document.forms["myForm"]["email"].value;
  var password = document.forms["myForm"]["password"].value;

  if (username == "") {
    alert("username is missing");
    return false;
  }
  else if (email == ""){
    alert("email is missing");
    return false;
  }
  else if (password == "") {
    alert("password is missing");
    return false;
  }
  else if (typeof password != 'number'){
    alert("password does not meet requirement");
    return false;
  }

}
