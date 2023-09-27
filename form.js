// alert("Click OK!,to go to the details page");
const name = document.getElementById('name'); 
const email = document.getElementById('email');
const mobile_number = document.getElementById('mobile_number');
const age = document.getElementById('age'); 
const about = document.getElementById('about');
const experience = document.getElementById('experience');
const form = document.getElementById('form'); 
const errorElement = document.getElementById('error'); 

form.addEventListener('submit', (e) => {
    let messages = [];
    if (name.value == '' || name.value == null) {
        messages.push('Name is required');
    }
    var emailAddress = "example@email.com";
    if (isValidEmail(emailAddress)) {
        console.log("Email is valid.");
    } else {
        console.log("Email is not valid.");
    }
    if (email.value=='')
    if (mobile_number.value.length <= 10) {
        messages.push('Mobile number should be 10 digits');
    }
    if (password.value.length >= 10) {
        messages.push('Mobile number should be less than 10 digits');
    }
    if (messages.length > 0) {
        e.preventDefault();
        errorElement.innerText = messages.join(', ');
    }

});
// function isValidEmail(email) {
//     // Regular expression for email validation
//     var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
//     return emailPattern.test(email);
//   }
  
//   // Example usage:
//   var emailAddress = "example@email.com";
//   if (isValidEmail(emailAddress)) {
//     console.log("Email is valid.");
//   } else {
//     console.log("Email is not valid.");
//   }
  