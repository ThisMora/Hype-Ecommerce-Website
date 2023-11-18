'use strict';

/**
 * Mobile Navbar Toggle
 */

const navbar = document.querySelector("[data-navbar]");
const navToggler = document.querySelector("[data-nav-toggler]");

navToggler.addEventListener("click", function () {
  navbar.classList.toggle("active");
});


/**
 * Header Active
 */

const header = document.querySelector("[data-header]");

window.addEventListener("scroll", function () {
  header.classList[this.scrollY > 50 ? "add" : "remove"]("active");
});


/**
 * Scroll To Top Button
 */
var scrollToTopButton = document.getElementById('scroll-to-top');

window.addEventListener('scroll', function() {
  if (window.pageYOffset > 100) {
    scrollToTopButton.style.display = "block";
  } else {
    scrollToTopButton.style.display = "none";
  }
});

scrollToTopButton.addEventListener('click', function() {
  window.scrollTo(0, 0);
});

/**
 * Form Validation
 */
function validateForm() {
  let fullName = document.forms["regForm"]["fullname"].value;
  let username = document.forms["regForm"]["username"].value;
  let email = document.forms["regForm"]["email"].value;
  let password = document.forms["regForm"]["password"].value;

  // Check if full name ('fullname') < 3 Characters
  if (fullName.length < 3) {
    alert("Full Name must be at least 3 letters.");
    return false;
  }

  // Check if username ('username') contains only letters, numbers, and underscores
  if (!/^[a-zA-Z0-9_]+$/.test(username)) {
    alert("Username can only contain letters, numbers, and underscores.");
    return false;
  }

  if (username.length < 4) {
    alert("Username must be at least 4 letters.");
    return false;
  }

  // Check if email ('email') is from one of the allowed domains
  if (!/^[a-zA-Z0-9_.+-]+@(gmail|hotmail|outlook|yahoo)\.com$/.test(email)) {
    alert("Email must be from Gmail, Hotmail, Outlook, or Yahoo.");
    return false;
  }

  // Check if password ('password') has at least one capital letter and is between 6 and 12 characters
  if (!/(?=.*[A-Z]).{6,12}/.test(password)) {
    alert("Password must be between 6 and 12 characters and contain at least one capital letter.");
    return false;
  }

  // All inputs are valid
  return true;
}