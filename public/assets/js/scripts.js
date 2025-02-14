/* HERO SWIPER - BANNER EM CARROSSEL */
var swiper = new Swiper(".HeroSwiper", {
    grabCursor: true,
    loop: true,
    centeredSlides: true,

    autoplay: {
        delay: 7000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
    },
});