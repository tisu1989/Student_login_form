function validate(){
var st_name=document.forms["myForm"]["name"].value;
var st_email=document.forms["myForm"]["email"].value;
var st_phone=document.forms["myForm"]["phone"].value;
var st_addr=document.forms["myForm"]["addr"].value;
var st_course=document.forms["myForm"]["course"].value;
//console.log(st_name);
//return false;
if(st_name==''||st_name==null){
alert("Name can't be null");
st_name.focus();
return false;
}

if(st_name.length<4)
{ alert("Name must be greater than 4 character");
 st_name.focus();
  return false; }
//console.log(st_name); 
    if(st_email=='' ||st_email==null)
    { alert("email can't be empty");
     st_email.focus();
     return false;
    }
    if(st_email.length>15)
    { alert("email cant be greater than 15 character");
    st_email.focus();
    return false;


    }

    if(st_phone==''){
    alert("phone can't be empty");
    st_phone.focus();
    return false;


    }
    if(st_phone!=10){
    alert("Phone number should be of 10 digits");
    st_phone.focus();
    return false;

    }

    if(st_addr==''){
    alert("Address can't be empty");
    st_addr.focus();
    return false;


    }
    if(st_addr.length<5)
    { alert("Address should be greater than 5 digits"); 
    st_addr.focus();
     return false; }
        if(st_course=='' )
        { alert("course can't be empty"); 
        st_course.focus();
         return false; } 
        if(st_course.length>8){
        alert("Course should not be greater than 8 digits");
        st_course.focus();
        return false;


        }

    }