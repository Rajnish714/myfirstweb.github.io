//signup page validation

function validateform() {
    /*
    let name = document.getElementById("namebox");
    let namenotemail = /^([a-zA-Z0-9_\-\.]){1,}\@([a-zA-Z0-9_\-\.]){1,}\.([a-z]{2,8})$/;
    if (name.value == "") {
        name.focus();
        name.style.border = "2px solid red";
        document.getElementById("nameerror").innerHTML = "name is too short";
        return false;
    } else {
        name.focus();
        name.style.border = "";
        document.getElementById("nameerror").innerHTML = "";
    }
*/
    let number = document.getElementById("numberbox");
    let numbtest = /^[7-9][0-9]{9}$/;
    if (numbtest.test(number.value)) {

        number.focus();
        number.style.border = "";
        document.getElementById("numbererror").innerHTML = "";

    } else {
        number.style.border = "2px solid red";
        document.getElementById("numbererror").innerHTML = "please enter valid number";
        return false;

    }

    var email = /^([a-zA-Z0-9_\-\.]){1,}\@([a-zA-Z0-9_\-\.]){1,}\.([a-z]{2,8})$/;
    var emailbox = document.getElementById("email");
    if (emailbox.value.match(email)) {
        emailbox.focus();
        emailbox.style.border = "";
        document.getElementById("emailerror").innerHTML = "";
    } else {
        emailbox.focus();
        emailbox.style.border = "solid 2px red";
        document.getElementById("emailerror").innerHTML = "please enter valid email";
        return false;

    }

    var password = document.getElementById("passbox");
    if (password.value == "" || password.value.length < 6) {

        password.focus();
        password.style.border = "solid 2px red";
        document.getElementById("passerror").innerHTML = "password must be 6 digits";
        return false;
    } else {

        password.focus();
        password.style.border = "";
        document.getElementById("passerror").innerHTML = "";
    }


}