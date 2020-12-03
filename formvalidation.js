function validateLoginForm(){
    var x = document.forms["loginForm"]["Username"].value;
    var y = document.forms["loginForm"]["Password"].value;
    if(x == ""){
        alert("Please enter your username");
        return false;
    }
    if(y == "" || y.length >= 12 || y.length <= 8){
        alert("Password must contain more than 5 and less than 12 letters");
        return false;
    }
}

function validateSigninForm(){
    var x = document.forms["signinForm"]["Username"].value;
    var y = document.forms["signinForm"]["Password"].value;
    var z = document.forms["signinForm"]["Email-id"].value;
    if(x == ""){
        alert("Please enter your username");
        return false;
    }
    if(y == "" || y.length >= 12 || y.length <= 8){
        alert("Password must contain more than 5 and less than 12 letters");
        return false;
    }
    if(z == ""){
        alert("Please enter your email adress");
        return false;
    }
}