const form = document.getElementById("myForm");
const nameInput = document.getElementById("name");
const nameError = document.getElementById("nameError");
const mobileInput = document.getElementById("mobile");
const mobileError = document.getElementById("mobileError");
const ageInput = document.getElementById("age");
const ageError = document.getElementById("ageError");
const aboutInput = document.getElementById("about");
const aboutError = document.getElementById("aboutError");
const experienceInput = document.getElementById("experience");
const experienceError = document.getElementById("experienceError");
const emailInput = document.getElementById("email");

form.addEventListener("submit", function (e) {
    let valid = true;
    if (nameInput.value === "") {
        nameError.innerText = "Name is required";
        valid = false;
    } else {
        nameError.innerText = "";
    }
    const email = emailInput.value;
    const emailPattern = /.+@.+\..+/;
    if (!emailPattern.test(email)) {
        alert("Please enter a valid email address.");
        e.preventDefault(); // Prevent form submission
    }
    const mobilePattern = /^\d{10}$/;
    if (!mobilePattern.test(mobileInput.value)) {
        mobileError.innerText = "Mobile number should be 10 digits";
        valid = false;
    } else {
        mobileError.innerText = "";
    }
    if (ageInput.value < 18) {
        ageError.innerText = "Age must be 18 or older";
        valid = false;
    } else {
        ageError.innerText = "";
    }
    if (aboutInput.value.trim() === "") {
        aboutError.innerText = "About field is required";
        valid = false;
    } else {
        aboutError.innerText = "";
    }
    if (experienceInput.value === "") {
        experienceError.innerText = "Please select your experience level";
        valid = false;
    } else {
        experienceError.innerText = "";
    }

    if (!valid) {
        e.preventDefault();
    }
});

