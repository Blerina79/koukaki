const hamburgerButton = document.querySelector(".nav-toggle");

const navigation = document.querySelector("nav");

hamburgerButton.addEventListener("click", toggleNav);

function toggleNav() {
    hamburgerButton.classList.toggle("active");
    navigation.classList.toggle("active");
    console.log("test");
}



//  Swiper init 

const swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: false,
    slidesPerView: "auto",
    pagination: ".swiper-pagination",
    coverflowEffect: {
        rotate: 40,
        stretch: 0,
        depth: 20,
        modifier: 1,
        slideShadows: false,
    },
    slidesOffsetBefore:500,
});