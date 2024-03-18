const hamburgerButton = document.querySelector(".nav-toggle");

const navigation = document.querySelector("nav");

hamburgerButton.addEventListener("click", toggleNav);

function toggleNav() {
    hamburgerButton.classList.toggle("active");
    navigation.classList.toggle("active");
    console.log("test");
}

