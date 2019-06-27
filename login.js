
function logValidate(){

    var username=document.forms["loginuser"]["username"].value;
    var password=document.forms["loginuser"]["password"].value;



    /*if(passwordValidation(password)){
     return true;
     }else {
     return false;
     }*/


    if(isAlphebatic2(username))
        if(passwordValidation(password))

            return true;
        else
            return false;
    else
        return false;



}


function isEmpty(elemValue,field) {
    if (elemValue == "" || elemValue == null) {
        alert("you cannot have " + field + " filed empty");
        return true;
    }
    else {
        return false;
    }
}



function isAlphebatic2(elemValue){
    var exp=/^[a-zA-Z]+$/;
    if(!isEmpty(elemValue,"Username")){
        if(elemValue.match(exp)){
            return true;
        }
        else{
            alert("Enter only text for your Username.You can't add spaces.");
            return false;
        }
    }
    else{
        return false;
    }
}



function passwordValidation(elemValue) {
    if(!isEmpty(elemValue,"Password")) {
        var pw = document.forms["myForms"]["password"].value;
        var specialchar = "~!@#$%^&*_";
        var count=0;


        for (var i = 0; i < pw.length; i++) {
            if (specialchar.indexOf(pw.charAt(i)) > -1) {
                count = 1;
            }
        }


        if (/[a-z]/.test(pw)) {
            count ++;
        }

        if (/[A-Z]/.test(pw)) {
            count ++;
        }
        if (/[\d]/.test(pw)) {
            count ++;
        }
        if (pw.length >= 8) {
            count ++;
        }


        if(count>=5) {
            return true;
        }
        else {

            alert("Password must be at least 8 characters long and must be a combination of uppercase characters, lowercase characters, numeric characters and a special character. ");
            return false;
        }

    }else {
        return false;
    }


}










