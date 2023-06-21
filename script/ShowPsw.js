function togglePassword() {
    var passwordInput = document.querySelector("#password");
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
    } else {
        passwordInput.type = "password";
    }
}

function toggleNewPassword() {
    var passwordInput = document.querySelector("#newpassword");
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
    } else {
        passwordInput.type = "password";
    }
}
