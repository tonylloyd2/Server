function toggle(){
    const loginForm = document.querySelector('#login-form');
    const signupForm = document.querySelector('#signup-form');
    const loginLink = document.querySelector('#login-link');
    const signupLink = document.querySelector('#signup-link');

    signupLink.addEventListener('click', function() {
    signupForm.style.display = 'block';
    loginForm.style.display = 'none';
    });
    
    loginLink.addEventListener('click', function() {
        signupForm.style.display = 'none';
        loginForm.style.display = 'block';
        });
}

// redirect from membership to blog page


function showSignUpPassword() {
  var passwordField = document.getElementById("login_password");
  var toggleIcon = document.querySelector(".toggle-password i");

  if (passwordField.type === "password") {
    passwordField.type = "text";
    toggleIcon.classList.remove("fa-eye");
    toggleIcon.classList.add("fa-eye-slash");
  } else {
    passwordField.type = "password";
    toggleIcon.classList.remove("fa-eye-slash");
    toggleIcon.classList.add("fa-eye");
  }
}

function showPassword() {
  var passwordField = document.getElementById("password");
  var toggleIcon = document.querySelector("#password ~ .toggle-password i");
  if (passwordField.type === "password") {
    passwordField.type = "text";
    toggleIcon.classList.remove("fa-eye");
    toggleIcon.classList.add("fa-eye-slash");
  } else {
    passwordField.type = "password";
    toggleIcon.classList.remove("fa-eye-slash");
    toggleIcon.classList.add("fa-eye");
  }
}

function showConfirmPassword() {
  var confirmPasswordField = document.getElementById("confirm_password");
  var toggleIcon = document.querySelector("#confirm_password ~ .toggle-password i");
  if (confirmPasswordField.type === "password") {
    confirmPasswordField.type = "text";
    toggleIcon.classList.remove("fa-eye");
    toggleIcon.classList.add("fa-eye-slash");
  } else {
    confirmPasswordField.type = "password";
    toggleIcon.classList.remove("fa-eye-slash");
    toggleIcon.classList.add("fa-eye");
  }
}