function validate(){
    var st_name=document.myform.name.value; 
    var st_email=document.myform.email.value; 
    var st_phone=documen.myform.phone.value; 
    var st_addr=document.myform.addr.value;
    var st_course=document.myform.course.value;  
    const min=3; max=25;
    //console.log(name)
    if(st_name==''||st_name==null){
        document.getElementById('errorname').innerHTML="Name cant be empty";
        return false;
    }
   
     if(st_name.length<4){
            document.getElementById('errorname').innerHTML="Name must be greater than 4 character";
            return false;

        }
    
        else{
            document.getElementById('errorname').innerHTML="";
            return false;
    
        }
    
    console.log(st_name);

    if(st_email==''||st_email==null){
        document.getElementById('errorname').innerHTML="email can't be empty";
        return false;
    }
    if(st_email.length>15)
    {  document.getElementById('errorname').innerHTML="email cant be greater than 15 character";
    return false;


    }
    else{
        document.getElementById('erroremail').innerHTML="";
        return false;

    }
    if(st_phone==''){
        document.getElementById('errorname').innerHTML="phone can't be empty";
        return false;


    }
    if(st_phone!=10){
        document.getElementById('errorname').innerHTML="Phone number should be of 10 digits";
        return false;

    }
    else{document.getElementById('erroremail').innerHTML="";
    return false;

    }
    if(st_addr==''){
        document.getElementById('errorname').innerHTML="Address can't be empty";
        return false;


    }
    if(st_addr.length<5){
        document.getElementById('errorname').innerHTML="Address should be greater than 5 digits";
        return false;


    }
     else{document.getElementById('erroremail').innerHTML="";
     return false;
}
if(st_course==''){
    document.getElementById('errorname').innerHTML="course can't be empty";
    return false;
}
if(st_course.length>8){
    document.getElementById('errorname').innerHTML="Course should not  be greater than 8 digits";
    return false;


}
else{document.getElementById('erroremail').innerHTML="";
     return false;
}
}
   // console.log(name)
    //.log(email)


    

    






    // let nameError = document.getElementById('error').innerHTML="Name cant be empty";
    // console.log(nameError)

    // if(nameError==''){
    //     alert('hi');
    // }

    

    // if(name==''||name==null){
    //     document.getElementById('error').innerHTML="Name cant be empty";
    // } else{
    //     document.getElementById('error').innerHTML="";
    //     return false;
    // }


    // if(name.length > min || name.length<max){
    //     document.getElementById('error').innerHTML="Name cant be less than 3 or greater than 25";
    // }else{
    //     document.getElementById('error').innerHTML="";  
    // }





     