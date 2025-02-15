
/*======================================== HERO - BANNER EM CARROSSEL ======================================== */
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




/*======================================== PESQUISA FILTRADA & MAP ======================================== */
var swiper = new Swiper(".PesquisaSwiper", {
    centeredSlides: true,
    spaceBetween: 30,
    /*autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    }, */
    slidesPerView: 1,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
        clickable: true,
        renderBullet: function (index, className) {
            return '<span class="' + className + '"><p>' + (index + 1) + "</p></span>";
        },
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

// Pára o autoplay quando o mouse passar sobre um swiper-slide
/* document.querySelectorAll('.PesquisaSwiper .swiper-slide').forEach(function (slide) {
    slide.addEventListener('mouseenter', function () {
        swiper.autoplay.stop();
    });

    // Retoma o autoplay quando o mouse sair do swiper-slide
    slide.addEventListener('mouseleave', function () {
        swiper.autoplay.start();
    });
}); */



/*======================================== EMPRESAS ======================================== */
/* var swiper = new Swiper(".EmpresasSwiper", {
    slidesPerView: 5,
    centeredSlides: true,
    spaceBetween: 40,
    grabCursor:true,
    autoplay: {
        delay: 2000,
        disableOnInteraction: false,
    },
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
});

document.querySelectorAll('.EmpresasSwiper .swiper-slide').forEach(function (slide) {
    slide.addEventListener('mouseover', function () {
        swiper.autoplay.stop();
    });

    // Retoma o autoplay quando o mouse sair do swiper-slide
    slide.addEventListener('mouseleave', function () {
        swiper.autoplay.start();
    });
});

 */

/*======================================== FOOD ======================================== */
var swiper = new Swiper(".FoodSwiper", {
    slidesPerView: 1,
    centeredSlides: true,
    grabCursor:true,
    spaceBetween: 20,
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });