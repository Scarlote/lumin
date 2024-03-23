let preloader = document.querySelector(".preloader");
let spans = document.getElementsByTagName('span');

for (let i = 0; i < spans.length; i++) {
    spans[i].style.animationDelay = (0.2 * i) + 's';
}

///////////////////////////////////////////////////////////////////////////////////////////

let loginForm = document.getElementById("login-form");
let notification = document.getElementsByClassName("notification");

function DOMLoaded(condition, action) {
    let queryString = window.location.search;
    if (queryString.includes(condition)) { action(); }
}

document.addEventListener("DOMContentLoaded", function () {
    DOMLoaded("hideDiv=true", function() { loginForm.style.display = "none"; });
    DOMLoaded("showMessage=true", function() { 
        notification[0].style.animation = "appear 0.5s forwards, appear 0.5s 2s forwards reverse"; 
    });

    preloader.style.display = "none";
});