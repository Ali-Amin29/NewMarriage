///////////////////////////////////////////////////

function validate(event) {
    const elementRegex = {
        userName: /([أ-ى])+/g,
        password: /^(?=.*\d)(?=.*[a-zA-Z]).{8,}$/,
        passwordConfirm: /^(?=.*\d)(?=.*[a-zA-Z]).{8,}$/,
        phone: /[0-9]{10}$/,
    };

    userName.oninput = () => {
        if (!userName.value.match(elementRegex["userName"])) {
            userName.className = "form-control is-invalid";
        } else {
            userName.className = "form-control is-valid";
        }
    };
    phone.oninput = () => {
        if (!phone.value.match(elementRegex["phone"])) {
            phone.className = "form-control is-invalid";
        } else {
            phone.className = "form-control is-valid";
        }
    };
    password.oninput = () => {
        if (!password.value.match(elementRegex["password"])) {
            password.className = "form-control is-invalid";
        } else {
            password.className = "form-control is-valid";
        }
    };
    passwordConfirm.oninput = () => {
        if (passwordConfirm.value !== password.value ) {
            passwordConfirm.className = "form-control is-invalid";
        } else {
            passwordConfirm.className = "form-control is-valid";
            console.log(passwordConfirm.value);
        }
    };

    if (
        !userName.value.match(elementRegex["userName"])

    ) {
        event.preventDefault();
        userName.className = "form-control is-invalid";

    } else if (
        !phone.value.match(elementRegex["phone"])
    ) {
        event.preventDefault();
        phone.className = "form-control is-invalid";

    }
    // validate username duplication
    // validate password
    else if (
        !password.value.match(elementRegex["password"])

    ) {
        event.preventDefault();
        password.className = "form-control is-invalid";
    }
    // validate Confirm password
    else if (!passwordConfirm.value.match(elementRegex["passwordConfirm"])) {
        event.preventDefault();
        passwordConfirm.className = "form-control is-invalid";
    } else if (passwordConfirm.value !== password.value) {
        event.preventDefault();
        passwordConfirm.className = "form-control is-invalid";
    } else {
        userName.className = "form-control is-valid";
        phone.className = "form-control is-valid";
        password.className = "form-control is-valid";
        passwordConfirm.className = "form-control is-valid";
    }
}
