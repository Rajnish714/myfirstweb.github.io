//signup page validation



function validateTextBox() {



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
        document.getElementById("passerror").innerHTML = "";
        password.focus();
        password.style.border = "";
    }
}

function hello() {
    console.log(history);

}
hello();