const navbar = document.querySelector(".navbar");
const logo = document.querySelector(".logo-svg use");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");

const lightModeOn = (event) => {
  navbar.classList.add("navbar-light");
  logo.href.baseVal = "./img/sprite.svg#logo-dark";
};
const lightModeOff = (event) => {
  navbar.classList.remove("navbar-light");
  logo.href.baseVal = "./img/sprite.svg#logo-light";
};

//Функция открывания меню
const openMenu = (event) => {
  menu.classList.add("is-open");
  mMenuToggle.classList.add("close-menu");
  document.body.style.overflow = "hidden";
  lightModeOn();
};
//Функция закрывания меню
const closeMenu = (event) => {
  menu.classList.remove("is-open");
  mMenuToggle.classList.remove("close-menu");
  document.body.style.overflow = "";
  lightModeOff();
};

window.addEventListener("scroll", () => {
  this.scrollY > 1 ? lightModeOn() : lightModeOff();
});

mMenuToggle.addEventListener("click", (event) => {
  event.preventDefault();
  menu.classList.contains("is-open") ? closeMenu() : openMenu();
});

const swiper = new Swiper(".swiper", {
  speed: 400,
  autoHeight: true,
  slidesPerView: 1,
  loop: false,
  navigation: {
    nextEl: ".slider-button-next",
    prevEl: ".slider-button-prev",
  },
  breakpoints: {
    1: {
      loop: true,
      slidesPerView: 1,
      centeredSlides: true,
    },
    // when window width is >= 320px
    576: {
      slidesPerView: 2,
      centeredSlides: true,
      loop: true,
    },
    // when window width is >= 480px
    770: {
      slidesPerView: 3,
      loop: true,
    },
    // when window width is >= 640px
    1024: {
      slidesPerView: 4,
      loop: true,
    },
    1200: {
      slidesPerView: 5,
      loop: false,
    },
  },
});

const stepsSwiper = new Swiper(".steps-swiper", {
  speed: 400,
  slidesPerView: 1,
  navigation: {
    nextEl: ".steps-slider-button-next",
    prevEl: ".steps-slider-button-prev",
  },
  breakpoints: {
    1: {
      loop: true,
      slidesPerView: 1.3,
    },
    // when window width is >= 320px
    576: {
      slidesPerView: 2,
      loop: true,
    },
    // when window width is >= 480px
    770: {
      slidesPerView: 3,
      loop: true,
    },
    // when window width is >= 640px
    1024: {
      slidesPerView: 4,
      loop: false,
    },
  },
});
