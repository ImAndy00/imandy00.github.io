// JavaScript Document
var elFirstname = document.getElementById('firstname');
var elLastname = document.getElementById('lastname');
var elUsername = document.getElementById('username');
var elPassword = document.getElementById('password');
var elPhone = document.getElementById('phone');
var elEmail = document.getElementById('email');
var elComments = document.getElementById('comments');

function validateName(nameID, feedback, box){
    var el = document.getElementById(nameID);
    var elMsg = document.getElementById(feedback);
    var elBox = document.getElementById(box);
    var validRegex = /^[a-zA-Z-' ]{2,}$/;
    if (el.value.match(validRegex)){
        elBox.classList.remove("has-error");
        elBox.classList.add("has-success");
        elMsg.innerHTML = ''; 
    } else{
        elBox.classList.add("has-error");
        elMsg.classList.add("red");
        elMsg.innerHTML = nameID.toUpperCase()+' must be 2 characters or more, only letters, hyphens, and apostrophes';
    }
}

function checkData(minLength, inputID, feedback, box) {
  var el = document.getElementById(inputID);
  var elMsg = document.getElementById(feedback);
  var elBox = document.getElementById(box);
  if (el.value.length < minLength) { 
    elBox.classList.add("has-error");
    elMsg.classList.add("red");
    elMsg.innerHTML = inputID.toUpperCase()+' must be '+minLength+' characters or more'; 
  } else {
    elBox.classList.remove("has-error");
    elBox.classList.add("has-success");
    elMsg.innerHTML = ''; 
  }
}

function validatePhone(phoneID){
    var phone = document.getElementById(phoneID);
    var elMsg = document.getElementById('feedbackPhone');
    var elBox = document.getElementById('phoneBox');
    if (phone.value.length == 10) {
        elBox.classList.remove("has-error");
        elBox.classList.add("has-success");
        elMsg.innerHTML = ''; 
    } else{
        elBox.classList.add("has-error");
        elMsg.classList.add("red");
        elMsg.innerHTML = phoneID.toUpperCase()+' must be exactly 10 digits';
    }
}

function validateEmail(emailID){
    var email = document.getElementById(emailID);
    var elMsg = document.getElementById('feedbackEmail');
    var elBox = document.getElementById('emailBox');
    var validRegex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (email.value.match(validRegex)){
        elBox.classList.remove("has-error");
        elBox.classList.add("has-success");
        elMsg.innerHTML = ''; 
    } else{
        elBox.classList.add("has-error");
        elMsg.classList.add("red");
        elMsg.innerHTML = emailID.toUpperCase()+' invalid';
    }
}

function validateComments(commentID) {
    var comment = document.getElementById(commentID);
    var elMsg = document.getElementById('feedbackComments');
    var elBox = document.getElementById('commentsBox');
    if (comment.value.length < 1) { 
        elBox.classList.add("has-error");
        elMsg.classList.add("red");
        elMsg.innerHTML = commentID.toUpperCase()+' field must not be empty'; 
    } else {
        elBox.classList.remove("has-error");
        elBox.classList.add("has-success");
        elMsg.innerHTML = '';
    }
}

elFirstname.addEventListener('blur', function() {
    validateName('firstname', 'feedbackFirst', 'firstNameBox');
},false);

elLastname.addEventListener('blur', function() {
    validateName('lastname', 'feedbackLast', 'lastNameBox');
},false);

elUsername.addEventListener('blur', function() {
    checkData(6,'username', 'feedbackUser', 'usernameBox');
},false);

elPassword.addEventListener('blur', function() {
    checkData(6,'password', 'feedbackPassword', 'passwordBox');
},false);

elPhone.addEventListener('blur', function() {
    validatePhone('phone');
},false);

elEmail.addEventListener('blur', function() {
    validateEmail('email');
},false);

elComments.addEventListener('blur', function() {
    validateComments('comments');
},false);