
/*======================================== HERO - BANNER EM CARROSSEL ======================================== */
var HeroSwiper = new Swiper(".HeroSwiper", {
  grabCursor: true,
  loop: true,
  centeredSlides: true,

  /* autoplay: {
    delay: 7000,
    disableOnInteraction: false,
  }, */
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
  centeredSlides: true,
  autoplay: {
    delay: 7000,
    disableOnInteraction: false,
  },
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});



/*======================================== EMPRESAS ======================================== */
var EmpSwiper = new Swiper(".EmpresasSwiper", {
  slidesPerView: 1,
  spaceBetween: 10,
  loop: true,
  autoplay: {
    delay: 3400,
    disableOnInteraction: false,
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
  slide.addEventListener('mouseenter', function () {
    EmpSwiper.autoplay.stop(); // Para a animação ao passar o mouse
  });

  slide.addEventListener('mouseleave', function () {
    EmpSwiper.autoplay.start(); // Retoma a animação ao sair o mouse
  });
});



/*======================================== TESTEMUNHO ======================================== */
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


/*======================================== MENU HAMBURGUER ======================================== */
class MobileNavbar {
  constructor(mobileMenu, navList, navLinks) {
      this.mobileMenu = document.querySelector(mobileMenu);
      this.navList = document.querySelector(navList);
      this.navLinks = document.querySelectorAll(navLinks);
      this.activeClass = "active";

      this.handleClick = this.handleClick.bind(this);
  }

  animateLinks() {
      this.navLinks.forEach((link, index) => {
          link.style.animation
              ? (link.style.animation = "")
              : (link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.3
                  }s`);
      });
  }

  handleClick() {
      this.navList.classList.toggle(this.activeClass);
      this.mobileMenu.classList.toggle(this.activeClass);
      this.animateLinks();
  }

  addClickEvent() {
      this.mobileMenu.addEventListener("click", this.handleClick);
  }

  init() {
      if (this.mobileMenu) {
          this.addClickEvent();
      }
      return this;
  }
}

const mobileNavbar = new MobileNavbar(
  ".mobile-menu",
  ".navbar",
  ".nav-list .nav-item",
);
mobileNavbar.init(); 


























// Função para ocultar o texto, aumentar o tamanho dos ícones e manter visíveis os ícones
function adjustDisplay() {
  const spans = document.querySelectorAll('.tagincolhe');

   // Verifica se a largura da tela é menor ou igual a 600px
   if (window.innerWidth <= 360) {
    spans.forEach(span => {
      // Aumenta o tamanho do ícone para 2rem
      const icon = span.querySelector('i');
      if (icon) {
        icon.style.fontSize = '.9rem';
      }

      // Aumenta o padding da tag <span> para 1rem
      span.style.padding = '0rem';
      span.style.padding = '.4rem';

      // Esconde o texto e deixa visível o ícone
      span.childNodes.forEach(child => {
        if (child.nodeType === Node.TEXT_NODE) {
          child.textContent = ''; // Esconde o texto
        }
      });
    });
  } else {
    spans.forEach(span => {
      // Restaura o texto quando a tela é maior que 600px
      span.childNodes.forEach(child => {
        if (child.nodeType === Node.TEXT_NODE) {
          if (span.classList.contains('pop')) {
            child.textContent = 'Popular'; // Restaura o texto de "Popular"
          } else if (span.classList.contains('freeshipping')) {
            child.textContent = 'Entrega'; // Restaura o texto de "Entrega"
          }
        }
      });

      // Restaura o tamanho original do ícone quando a tela for maior que 600px
      const icon = span.querySelector('i');
      if (icon) {
        icon.style.fontSize = ''; // Restaura o tamanho original do ícone
      }

      // Restaura o padding original da tag <span>
      span.style.padding = ''; // Restaura o padding original
    });
  }
}

// Chama a função sempre que a janela é redimensionada
window.addEventListener('resize', adjustDisplay);

// Chama a função também ao carregar a página
window.addEventListener('load', adjustDisplay);