// function clearErrors(){

//     errors = document.getElementsByClassName('formerror');
//     for(let item of errors)
//     {
//         item.innerHTML = "";
//     }

// }
// function seterror(id, error){

//     //sets error inside tag of id
//    let element = document.getElementsById(id);

//    //console.log(id);
//    //return false;
//      element.getElementsByClassName('formerror')[0].innerHTML = error;

// }

// function validateForm(){

//     let returnval = true;
//     clearErrors();

//     //perform validation and if validation fails, set the value of returnval to false
//     let fname = document.forms['myform']['name'].value;
//     //console.log(fname);
//     //return false;

//     if (fname.length<5){
//         seterror("fname", "*Length of name is too short");
//         returnval = false;

//     }

//     if (fname.length == 0){
//         seterror("fname", "*Length of name cannot be zero!");
//         returnval = false;

//     }

//     let femail = document.forms['myform']['email'].value;
//     if (femail.length>15){
//         seterror("femail", "*Email length is too long");
//         returnval = false;

//     }

//     <let faddr = document.forms['myform']['addr'].value;
//     if (faddr.length 5){
//         seterror("faddr", "*Address should be of greater than five digits!");
//         returnval = false;

//     }
//     let fphone = document.forms['myform']['phone'].value;
//     if (fphone.length != 10){
//         seterror("fphone", "*Phone number should be of 10 digits!");
//         returnval = false;

//     }
//     let fcourse = document.forms['myform']['course'].value;
//     if (fcourse.length < 10){
//         seterror("fcourse", "*Course  should be less than  10 digits!");
//         returnval = false;

//     }

//     return returnval;
// }

function validate() {

  var st_name = document.forms["myForm"]["name"].value;
  var st_email = document.forms["myForm"]["email"].value;
  var st_addr = document.forms["myForm"]["addr"].value;
  var st_phone = document.forms["myForm"]["phone"].value;
  var st_course = document.forms["myForm"]["course"].value;
 document.getElementById("nameError").innerHTML ="";
 document.getElementById("emailError").innerHTML ="";
 document.getElementById("addrError").innerHTML ="";
 document.getElementById("phoneError").innerHTML ="";
 document.getElementById("courseError").innerHTML ="";
  var status = true;

  if (st_name.length <=2) {
    if (st_name == "" || st_name == null) {
      document.getElementById("nameError").innerHTML =  "Name can't be null";
    } else {
      document.getElementById("nameError").innerHTML =  "Name must be greater than 2 characters";
    }
    status = false;
  }
if (st_email.length <= 5) {
  if (st_email == "" || st_email == null) {
    
    document.getElementById("emailError").innerHTML = "Email can't be empty ";
  }
  else{
    document.getElementById("emailError").innerHTML = "email must be greater than 5 characters";
  }
  
  status = false;
}

    
if (st_addr.length <= 5){
  if (st_addr == "") {
    document.getElementById("addrError").innerHTML = "Address can't be empty";

    
  }
  else {
    document.getElementById("addrError").innerHTML =
      "Address should be greater than 5 digits";

  }
  status = false;
  }
  if (st_phone.length != 10){
  if (st_phone == "") {
    document.getElementById("phoneError").innerHTML = "phone can't be empty";
    
  }

  else{
    document.getElementById("phoneError").innerHTML =
      "Phone number should be of 10 digits";
    
  }
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
