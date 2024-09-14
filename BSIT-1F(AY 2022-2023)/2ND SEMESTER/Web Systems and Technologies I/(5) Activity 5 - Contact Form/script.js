let form = document.getElementById("form"),
    fname = document.getElementById("fname"),
    lname = document.getElementById("lname"),
    email = document.getElementById("email"),
    number = document.getElementById("number"),
    password = document.getElementById("password"),
    confirmation = document.getElementById("confirm"),
    errorMsg = document.getElementsByClassName("error"),
    failure = document.getElementsByClassName("failure"),
    success = document.getElementsByClassName("success");

let selectValue = document.querySelector('#select');
    
form.addEventListener("submit", (e) =>{
    e.preventDefault();
    
    
});

function myFunction() {

    // FIRST NAME & LAST NAME
    if(fname.value.trim() === "") {
        errorMsg[0].innerHTML = "First name cannot be blank";
        success[0].style.opacity = "0";
        failure[0].style.opacity = "1";
        document.getElementById("fname").style.borderColor = "red";
        document.getElementById("fname").style.transition = "0s";
    } else {
        errorMsg[0].innerHTML = "";
        success[0].style.opacity = "1";
        failure[0].style.opacity = "0";
        document.getElementById("fname").style.borderColor = "green";
        document.getElementById("fname").style.transition = "0s";
    }

    if(lname.value.trim() === "") {
        errorMsg[1].innerHTML = "Last name cannot be blank";
        success[1].style.opacity = "0";
        failure[1].style.opacity = "1";
        document.getElementById("lname").style.borderColor = "red";
        document.getElementById("lname").style.transition = "0s";
    } else {
        errorMsg[1].innerHTML = "";
        success[1].style.opacity = "1";
        failure[1].style.opacity = "0";
        document.getElementById("lname").style.borderColor = "green";
        document.getElementById("lname").style.transition = "0s";
    }


    // EMAIL
    const emailInput = document.getElementById("email").value;
    const emailReq = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // [^\s@]+ - matches one or more characters that are not whitespace or @,    @ - symbol that separates the local and domain parts of the email address.,    [^\s@]+\.[^\s@]+ - matches one or more characters that are not whitespace or @, followed by a dot, followed by one or more characters that are not whitespace or @.

    if (emailInput.trim() === "") {
        errorMsg[2].innerHTML = "Email cannot be blank";
        success[2].style.opacity = "0";
        failure[2].style.opacity = "1"; 
        document.getElementById("email").style.borderColor = "red";
        document.getElementById("email").style.transition = "0s";
    } else if (!emailReq.test(emailInput)) {
        errorMsg[2].innerHTML = "Email is invalid";
        success[2].style.opacity = "0";
        failure[2].style.opacity = "1";
        document.getElementById("email").style.borderColor = "red";
        document.getElementById("email").style.transition = "0s";
    } else {
        errorMsg[2].innerHTML = "";
        success[2].style.opacity = "1";
        failure[2].style.opacity = "0";
        document.getElementById("email").style.borderColor = "green";
        document.getElementById("email").style.transition = "0s";
    }

    // PHONE NUMBER
    var num = document.getElementById("number").value;
    var need = /^\d{11}$/; // \d - means matches any digit (0-9)    &    {11} - is a quantifier that matches the preceding element (in this case, \d) exactly 11 times. 
    if(num.trim() === "") {
        errorMsg[3].innerHTML = "Phone number cannot be blank";
        success[3].style.opacity = "0";
        failure[3].style.opacity = "1";
        document.getElementById("number").style.borderColor = "red";
        document.getElementById("number").style.transition = "0s";
    } else if (need.test(num)) {
        errorMsg[3].innerHTML = "";
        success[3].style.opacity = "1";
        failure[3].style.opacity = "0";
        document.getElementById("number").style.borderColor = "green";
        document.getElementById("number").style.transition = "0s";
    } else {
        errorMsg[3].innerHTML = "Phone number must contains 11 digits";
        success[3].style.opacity = "0";
        failure[3].style.opacity = "1";
        document.getElementById("number").style.borderColor = "red";
        document.getElementById("number").style.transition = "0s";
    }


    // PASSWORD   
    var passw = document.getElementById("password").value;
    var req = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{8,}$/;
    
    if (passw.trim() === "") {
        errorMsg[4].innerHTML = "Password cannot be blank";
        success[4].style.opacity = "0";
        failure[4].style.opacity = "1";
        document.getElementById("password").style.borderColor = "red";
        document.getElementById("password").style.transition = "0s";
    } else if (req.test(passw)) {
        errorMsg[4].innerHTML = "";
        success[4].style.opacity = "1";
        failure[4].style.opacity = "0";
        document.getElementById("password").style.borderColor = "green";
        document.getElementById("password").style.transition = "0s";
    } else {
        errorMsg[4].innerHTML = "Password should have at least eight characters or longer. It must contain 1 lowercase character, 1 uppercase character, 1 number, and at least one special character in this set (!@#$%^&*). ";
        success[4].style.opacity = "0";
        failure[4].style.opacity = "1";
        document.getElementById("number").style.borderColor = "red";
        document.getElementById("number").style.transition = "0s";
    }

    //CONFIRMATION
    if(confirmation.value.trim() === "") {
        errorMsg[5].innerHTML = "Confirmation cannot be blank";
        success[5].style.opacity = "0";
        failure[5].style.opacity = "1";
        document.getElementById("confirm").style.borderColor = "red";
        document.getElementById("confirm").style.transition = "0s";
    } else if (confirmation.value == password.value) {
        errorMsg[5].innerHTML = "";
        success[5].style.opacity = "1";
        failure[5].style.opacity = "0";
        document.getElementById("confirm").style.borderColor = "green";
        document.getElementById("confirm").style.transition = "0s";
    } else {
        errorMsg[5].innerHTML = "Doesn't match.";
        success[5].style.opacity = "0";
        failure[5].style.opacity = "1";
        document.getElementById("confirm").style.borderColor = "red";
        document.getElementById("confirm").style.transition = "0s";
    }

    // SELECTION
    if (selectValue.value === "") {
        errorMsg[6].innerHTML = "Select one";
    } else {
        errorMsg[6].innerHTML = "";
    }
}


