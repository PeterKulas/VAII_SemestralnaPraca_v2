const paragraphPass = document.getElementById("passValue");
const passMsg = document.getElementById("passMsg");
const emailMsg = document.getElementById("emailMsg");
const strengthOfPassword = document.getElementById("spanPassValue");
const firstnameValidation = document.getElementById("firstnameValidation");
const lastnameValidation = document.getElementById("lastnameValidation");

const inputFirstName = document.getElementById("inputFirstname");
const inputLastName = document.getElementById("inputLastname");
const password = document.getElementById("inputPass");
const repassword = document.getElementById("inputRepass");
const inputEmail = document.getElementById("inputEmail");

/*Registration */

if (inputFirstName) {
    inputFirstName.addEventListener("input", function () {
        validateName(inputFirstName, firstnameValidation);
    });
}

if (inputLastName) {
    inputLastName.addEventListener("input", function () {
        validateName(inputLastName, lastnameValidation);
    });
}

if (password) {
    password.addEventListener("input", function () {
        if (!checkLength(0)) {
            paragraphPass.classList.add("hidden");
        }
        if (checkLength(0)) {
            paragraphPass.classList.remove("hidden");
            strengthOfPassword.innerHTML = "slabe";
            strengthOfPassword.style.color = "red";
        }
        if (checkLength(7) && validatePassword()) {
            strengthOfPassword.innerHTML = "dobre";
            strengthOfPassword.style.color = "orange";
        }
        if (checkLength(9) && validatePassword()) {
            strengthOfPassword.innerHTML = "vyborne";
            strengthOfPassword.style.color = "green";
        }
    });
}

if (repassword) {
    repassword.addEventListener("input", function () {
        passMsg.classList.remove("hidden");
        if (samePasswords()) {
            repassword.style.border = "5px solid #90EE90";
            passMsg.innerHTML = "Hesla su zhodné.";

            setTimeout(function () {
                document.getElementById("passMsg").innerHTML = "";
                repassword.style.border = "0px solid #90EE90";
                passMsg.classList.add("hidden");
            }, 2000);
        } else {
            document.getElementById("passMsg").innerHTML =
                "Hesla sa nezhodujú.";
            repassword.style.border = "5px solid #F08080";
        }
    });
}

if (inputEmail) {
    inputEmail.addEventListener("input", function () {
        console.log("mail");
        if (validateEmail(inputEmail)) {
            setInnerHtml(emailMsg, "Spravny format emailu");
            inputEmail.style.border = "5px solid #90EE90";

            setTimeout(function () {
                setInnerHtml(emailMsg, " ");
                inputEmail.style.border = "0px solid #90EE90";
            }, 2000);
        } else {
            inputEmail.style.border = "5px solid #F08080";
            setInnerHtml(emailMsg, "Format: text@text.text");
        }
    });
}

const samePasswords = function () {
    if (password.value === repassword.value) {
        return true;
    } else {
        return false;
    }
};

const validatePassword = function () {
    if (checkPwd(/\d/) && checkPwd(/[a-z]/) && checkPwd(/[A-Z]/)) {
        return true;
    } else {
        return false;
    }
};

const checkLength = function (count) {
    if (password.value.length > count) {
        return true;
    } else {
        return false;
    }
};

const checkPwd = function (regex) {
    let pwd = password.value;
    if (pwd.search(regex) == -1) {
        return false;
    } else {
        return true;
    }
};

const validateName = function (input, validation) {
    let name = input.value;
    console.log("hello");
    if (checkUnwantedChars(name) && checkFirstBigLetter(name)) {
        setInnerHtml(validation, " ");
    } else if (!checkUnwantedChars(name)) {
        setInnerHtml(validation, "Nesmie obsahovat cisla ani specialne znaky");
    } else if (!checkFirstBigLetter(name)) {
        setInnerHtml(validation, "1. znak musi byt veľké písmeno.");
    }
    if (name.length == 0) {
        setInnerHtml(validation, " ");
    }
};

const checkFirstBigLetter = function (input) {
    let regex = /^[A-Z]/;
    if (input.search(regex) == -1) {
        return false;
    } else {
        return true;
    }
};

const checkUnwantedChars = function (input) {
    let regex = /[-0-9!*@#$%^.,<>/_?()&;]/; //hlada toto
    if (input.search(regex) == -1) {
        return true;
    } else {
        return false;
    }
};

const validateEmail = function (input) {
    let regex = /\S+@\S+\.\S+/;
    if (regex.test(input.value)) {
        return true;
    } else {
        return false;
    }
};

const setInnerHtml = function (input, text) {
    input.innerHTML = text;
};
