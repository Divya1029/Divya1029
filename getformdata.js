alert("Get ready to fill the form");
// script.js
document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("myForm");

    form.addEventListener("submit", function (e) {
        e.preventDefault(); // Prevent the form from submitting normally

        // Retrieve form data
        const name = document.getElementById("name").value;
        const email = document.getElementById("email").value;

        // You can now use 'name' and 'email' variables to do something with the form data
        // For example, you can log it to the console:
        console.log("Name: " + name);
        console.log("Email: " + email);
    });
});
