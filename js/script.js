// Created By Kalyani : 

//make a valid and meaningful regex for company address validation

//Regular Expressions for form validation
const pattern = /^[a-zA-Z0-9]+$/;
const textPattern = /^[a-zA-Z]+$/
// let emailPattern = /^[a-zA-Z0-9._%+-]+@(?!gmail\.com$|yahoo\.com$|hotmail\.com$|outlook\.com$)([a-zA-Z0-9.-]+\.[a-zA-Z]{2,})$/;
const validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
const passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,50}$/;
const contactPattern = /^\d{10}$/;
const regex = new RegExp(/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/);
const pinPattern = /^\d{6}$/;

let c = document.forms["adminForm"]["contact"];
c.addEventListener('input', function () {
    let contact = c.value.trim();
    let contactPattern = /^\d{0,10}$/;

    // Restrict to 10 digits and only numbers
    if (!contactPattern.test(contact)) {
        c.value = contact.slice(0, 10);
    }
});

let p = document.forms["adminForm"]["pinCode"];
p.addEventListener('input', function () {
    let pincode = p.value.trim();
    let pinPattern = /^\d{6}$/;

    // Restrict to 6 digits and only numbers
    if (!pinPattern.test(pincode)) {
        p.value = pincode.slice(0, 6);
    }

});

let pan = document.forms["adminForm"]["panCard"];

pan.addEventListener('input', function () {
   
    let pancard = pan.value.trim();
    let panPattern = /^\d{0,10}$/;
    pan.value = pancard.toUpperCase();

    // Restrict to 10 digits and only numbers
if (!panPattern.test( pan.value)) {
    console.log("hello");
    pan.value =  pan.value.slice(0, 10);
}

});
function formValidation() {
   
    let isValid = true;

    //input values
    let cName = document.forms["adminForm"]["cName"].value.trim();
    let fName = document.forms["adminForm"]["fName"].value.trim();
    let lName = document.forms["adminForm"]["lName"].value.trim();
    let email = document.forms["adminForm"]["email"].value.trim();
    let password = document.forms["adminForm"]["password"].value.trim();
    let contact = document.forms["adminForm"]["contact"].value.trim();
    let panCard = document.forms["adminForm"]["panCard"].value.trim();
    let cAddress = document.forms["adminForm"]["cAddress"].value.trim();
    let pinCode = document.forms["adminForm"]["pinCode"].value.trim();
    let dist = document.forms["adminForm"]["dist"].value;
    let state = document.forms["adminForm"]["state"].value;
    let taluka = document.forms["adminForm"]["taluka"].value;
    let country = document.forms["adminForm"]["country"].value;
  function showError(elementId, message) {
        let errorElement = document.getElementById(elementId);
        errorElement.innerText = message;

    }

    function removeError(elementId) {
        let errorElement = document.getElementById(elementId);
        errorElement.innerText = '';
    }


    // Validate company name
    if (cName === '' || !textPattern.test(cName)) {
        showError('companyNameError', cName === '' ? "Enter the company name" : "Enter a valid company name");
        // document.getElementById('cName').focus();
        document.getElementById('cName').classList.add('focus');
        isValid = false;
        //  return false;
    } else {
        removeError("companyNameError");
    }

    // Validate first name

    if (fName === '' || !textPattern.test(fName)) {
        showError('firstNameError', fName === '' ? "Enter the first name" : "Enter text only");
        // document.getElementById('fName').focus();
        document.getElementById('fName').classList.add('focus');
        isValid = false;
        // return false;
    } else {
        removeError("firstNameError");
    }
 // Validate last name
    if (lName === '' || !textPattern.test(lName)) {
        showError('lastNameError', lName === '' ? "Enter the last name" : "Enter text only");
        //  document.getElementById('lName').focus();
        document.getElementById('lName').classList.add('focus');
        isValid = false;
        //  return false;
    } else {
        removeError("lastNameError");
    }
 // Validate email

    if (email === '' || !validRegex.test(email)) {
        showError('emailError', email === '' ? "Enter the email" : "Enter a valid company email");
        // document.getElementById('email').focus();
        document.getElementById('email').classList.add('focus');
        isValid = false;
        // return false;
    } else {
        removeError("emailError");
    }
 // Validate password
    if (password === '' || !passwordPattern.test(password)) {
        showError('passwordError', password === '' ? "Enter the password" : "Password should contain more than 6 characters, including uppercase, lowercase, digit, and special character");
        // document.getElementById('password').focus();
        document.getElementById('password').classList.add('focus');
        isValid = false;
        // return false;
    } else {
        removeError("passwordError");
    }
 // Validate contact
    if (contact === '' || !contactPattern.test(contact)) {
        showError('contactError', contact === '' ? "Enter the contact number" : "Enter a valid 10-digit contact number");
        // document.getElementById('contact').focus();
        document.getElementById('contact').classList.add('focus');
        isValid = false;
        // return false;
    } else {
        removeError("contactError");
    }
 // Validate PAN number
    if (panCard === "" || !regex.test(panCard)) {
        showError('panError', "Enter a valid PAN number");
        //  document.getElementById('panCard').focus();
        document.getElementById('panCard').classList.add('focus');
        isValid = false;
        // return false;
    } else {
        removeError("panError");
    }

    // Validate company address
    if (cAddress === '' || !isNaN(cAddress)) {
        showError('caddressError', cAddress === '' ? "Enter the company address" : "Enter detailed and valid company address");
        //  document.getElementById('cAddress').focus();
        document.getElementById('cAddress').classList.add('focus');
        isValid = false;
        //  return false;
    } else {
        removeError("caddressError");

    }

    // Validate pin code
    const pinPattern = /^\d{6}$/;
    if (pinCode === '' || !pinPattern.test(pinCode)) {
        showError('cpinError', pinCode === '' ? "Enter the pin code" : "Enter a valid 6-digit pin code");
        //  document.getElementById('pinCode').focus();
        document.getElementById('pinCode').classList.add('focus');
        isValid = false;
        //  return false;
    } else {
        removeError("cpinError");
    }

    // Validate country

    if (country === '') {
        showError('countryError', "Select the country");
        // document.getElementById('country').focus();
        document.getElementById('country').classList.add('focus');
        isValid = false;
        // return false;

    } else {
        removeError("countryError");
    }
    // Validate state

    if (state === '') {
        showError('stateError', "Select the state");
        // document.getElementById('state').focus();
        document.getElementById('state').classList.add('focus');
        isValid = false;
        // return false;

    } else {
        removeError("stateError");
    }

    // Validate district
    if (dist === '') {
        showError('distError', "Select the district");
        // document.getElementById('dist').focus();
        document.getElementById('dist').classList.add('focus');
        isValid = false;
        // return false;
    } else {
        removeError("distError");
    }
    // Validate taluka
    if (taluka === '') {
        showError('talukaError', "Select the taluka");
        //  document.getElementById('taluka').focus();
        document.getElementById('taluka').classList.add('focus');
        isValid = false;
        //  return false;
    } else {
        removeError("talukaError");
    }




    if (isValid) {
        // document.getElementById("adminForm").submit();
    }
    return isValid;
    //console.log('test dsf');

}

function errorRemove(fieldId, errorBoxId) {
    let field = document.getElementById(fieldId);
    let errorbox = document.getElementById(errorBoxId);
    field.addEventListener("input", function () {
        if (field.classList.contains('focus')) {
            errorbox.innerText = "";
            field.classList.remove('focus');
        }
    })

}
errorRemove("cName", "companyNameError");
errorRemove("fName", "firstNameError");
errorRemove("lName", "lastNameError");
errorRemove("email", "emailError");
errorRemove("password", "passwordError");
errorRemove("contact", "contactError");
errorRemove("panCard", "panError");
errorRemove("cAddress", "caddressError");
errorRemove("pinCode", "cpinError");
errorRemove("country", "countryError");
errorRemove("state", "stateError");
errorRemove("dist", "distError");
errorRemove("taluka", "talukaError");











