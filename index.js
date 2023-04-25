

function validate() {
  var st_name = document.forms["myForm"]["name"].value;
  var st_email = document.forms["myForm"]["email"].value;
  var st_addr = document.forms["myForm"]["addr"].value;
  var st_phone = document.forms["myForm"]["phone"].value;
  var st_course = document.forms["myForm"]["course"].value;
  document.getElementById("nameError").innerHTML = "";
  document.getElementById("emailError").innerHTML = "";
  document.getElementById("addrError").innerHTML = "";
  document.getElementById("phoneError").innerHTML = "";
  document.getElementById("courseError").innerHTML = "";
  var status = true;

  var letters = /^[A-Za-z]+$/;
  if (st_name.match(letters)) {
  } else {
    document.getElementById("nameError").innerHTML = "Name must be in characters";
    status = false;
  }
  if (st_name.length <= 1) {
    if (st_name == "" || st_name == null) {
      document.getElementById("nameError").innerHTML = "Name can't be null";
    } else {
      document.getElementById("nameError").innerHTML =
        "Name must be greater than 1 characters";
    }
    status = false;
  }
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if(st_email.match(mailformat)){

  }
  else{
    document.getElementById("emailError").innerHTML = "Please! fill  email is in Correct format";
  status = false;
  }
  if (st_email.length <= 5) {
    if (st_email == "" || st_email == null) {
      document.getElementById("emailError").innerHTML = "Email can't be empty ";
    } else {
      document.getElementById("emailError").innerHTML =
        "email must be greater than 5 characters";
    }

    status = false;
  }

  if (st_addr.length <= 5) {
    if (st_addr == "") {
      document.getElementById("addrError").innerHTML = "Address can't be empty";
    } else {
      document.getElementById("addrError").innerHTML =
        "Address should be greater than 5 digits";
    }
    status = false;
  }
var number =/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
if (st_phone.match(number)){

}else{
  document.getElementById("phoneError").innerHTML = "phone number  must be in numeric";
  status = false;
}
  if (st_phone.length != 10) {
    if (st_phone == "") {
      document.getElementById("phoneError").innerHTML = "phone can't be empty";
    } else {
      document.getElementById("phoneError").innerHTML =
        "Phone number should be of 10 digits";
    }
    status = false;
  }
  var coursename =  /^[A-Za-z]+$/;
  if(st_course.match(coursename)){

  }
  else{
    document.getElementById("courseError").innerHTML = "course   must be characters format";
  status = false;
  }


  if (st_course == "") {
    document.getElementById("courseError").innerHTML = "course can't be empty";

    status = false;
  }
  
  if (st_course.length > 8) {
    document.getElementById("courseError").innerHTML =
      "Course should not be greater than 8 digits";

    status = false;
  }

  return status;
}
