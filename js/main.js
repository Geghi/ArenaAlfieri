$(document).ready(function () {
    elem = document.getElementById("start");
    if(elem)
        $("html, body").animate({ scrollTop: ($('#start').offset().top - 100)}, 1000);

    AOS.init({
        easing: 'ease',
        duration: 1200,
    });
});

const header = document.getElementById("nav-menu");
const menuToggler = document.querySelector(".menu-toggler");
const navLinks = document.querySelector(".nav-link");
const links = document.querySelector("nav-links li");

menuToggler.addEventListener("click", () => {
    header.classList.toggle("open");
    menuToggler.classList.toggle("open");
});
/*
const languageButton = document.querySelector(".languageButton");


languageButton.addEventListener("click", () => {
    console.log(languageButton);
    path = window.location.href;

    console.log(languageButton.firstChild);
    alert(languageButton.firstChild == "\"Italian\"");
    if(languageButton.firstChild == "Italian"){
        
        location.href = "?lang=it";
    } else if (languageButton.firstChild == "English") { 

        location.href = "?lang=en";
    }
});
*/