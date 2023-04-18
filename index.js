function clearErrors(){

    errors = document.getElementsByClassName('formerror');
    for(let item of errors)
    {
        item.innerHTML = "";
    }


}
function seterror(id, error){
    console.log(error)
    //sets error inside tag of id 
    element = document.getElementById(id);
    // element.getElementsByClassName('formerror')[0].innerHTML = error;

}

function validateForm(){
    var returnval = true;
    clearErrors();

    //perform validation and if validation fails, set the value of returnval to false
    var Name = document.forms['myForm']["name"].value;
    if (Name.length<5){
        seterror("Name", "*Length of name is too short");
        returnval = false;
    }

    if (Name.length == 0){
        seterror("name", "*Length of name cannot be zero!");
        returnval = false;
    }

    var femail = document.forms['myForm']["email"].value;
    if (femail.length>15){
        seterror("email", "*Email length is too long");
        returnval = false;
    }

    var faddr = document.forms['myForm']["addr"].value;
    if (faddr.length< 5){
        seterror("addr", "*Address should be of greater than five digits!");
        returnval = false;
    }
    var fphone = document.forms['myForm']["phone"].value;
    if (fphone.length != 10){
        seterror("phone", "*Phone number should be of 10 digits!");
        returnval = false;
    }
    var fcourse = document.forms['myForm']["phone"].value;
    if (fcourse.length < 10){
        seterror("course", "*Course  should be less than  10 digits!");
        returnval = false;
    }


    return returnval;
}

