
/*======================================== HERO - BANNER EM CARROSSEL ======================================== */
var HeroSwiper = new Swiper(".HeroSwiper", {
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
var PesquisaSwiper = new Swiper(".PesquisaSwiper", {
    centeredSlides: true,
    spaceBetween: 30,
    autoplay: {
        delay: 9000,
        disableOnInteraction: false,
    },
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
document.querySelectorAll('.PesquisaSwiper .swiper-slide').forEach(function (slide) {
    slide.addEventListener('mouseenter', function () {
        PesquisaSwiper.autoplay.stop();
    });

    // Retoma o autoplay quando o mouse sair do swiper-slide
    slide.addEventListener('mouseleave', function () {
        PesquisaSwiper.autoplay.start();
    });
});



/*======================================== FOOD ======================================== */
var FoodSwiper = new Swiper(".FoodSwiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    loop:true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });



/*======================================== EMPRESAS ======================================== */
var EmpSwiper = new Swiper(".EmpresasSwiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    loop:true,
    autoplay: {
        delay:1500,
        disableOnInteraction:false,
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 4,
        spaceBetween: 40,
      },
      1024: {
        slidesPerView: 5,
        spaceBetween: 50,
      },
    },
  });
  document.querySelectorAll('.EmpresasSwiper .swiper-slide').forEach(slide => {
    slide.addEventListener('mouseenter', function() {
        EmpSwiper.autoplay.stop(); // Para a animação ao passar o mouse
    });

    slide.addEventListener('mouseleave', function() {
        EmpSwiper.autoplay.start(); // Retoma a animação ao sair o mouse
    });
});



var swiper = new Swiper(".testimonials-partners", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
    },
    pagination: {
      el: ".swiper-pagination",
    },
  });