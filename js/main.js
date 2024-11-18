const navbar = document.querySelector(".navbar");
const logoLight = document.querySelector(".logo-light");
const logoDark = document.querySelector(".logo-dark");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");
const isFront = document.body.classList.contains("front-page");

const lightModeOn = (event) => {
  navbar.classList.add("navbar-light");
};
const lightModeOff = (event) => {
  navbar.classList.remove("navbar-light");
};

const changeNavHeight = (height) => {
  navbar.style.height = height;
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
  this.scrollY > 1 ? changeNavHeight("4.5rem") : changeNavHeight("5.875rem");
  if (isFront) {
    this.scrollY > 1 ? lightModeOn() : lightModeOff();
  }
});

mMenuToggle.addEventListener("click", (event) => {
  event.preventDefault();
  menu.classList.contains("is-open") ? closeMenu() : openMenu();
});

const swiper = new Swiper(".swiper", {
  speed: 400,
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
      slidesPerView: 1.1,
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

const blogSwiper = new Swiper(".blog-swiper", {
  speed: 400,
  slidesPerView: 2,
  loop: true,
  spaceBetween: 30,
  navigation: {
    nextEl: ".blog-slider-button-next",
    prevEl: ".blog-slider-button-prev",
  },
  breakpoints: {
    770: {
      slidesPerView: 2,
    },
    1: {
      slidesPerView: 1,
    },
  },
});

const modal = document.querySelector(".modal");
const modalDialog = document.querySelector(".modal-dialog");

document.addEventListener("click", (event) => {
  if (
    event.target.dataset.toggle == "modal" ||
    event.target.parentNode.dataset.toggle == "modal" ||
    (!event.composedPath().includes(modalDialog) &&
      modal.classList.contains("is-open"))
  ) {
    event.preventDefault();
    modal.classList.toggle("is-open");
  }
});

document.addEventListener("keyup", (event) => {
  if (event.key == "Escape" && modal.classList.contains("is-open")) {
    modal.classList.toggle("is-open");
  }
});
