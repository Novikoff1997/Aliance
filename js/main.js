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
  if (isFront) {
    lightModeOff();
  }
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
      slidesPerView: 1.3,
      // centeredSlides: true,
    },
    // when window width is >= 320px
    576: {
      slidesPerView: 1,
      loop: true,
    },
    // when window width is >= 480px
    770: {
      slidesPerView: 2,
      loop: true,
    },
    // when window width is >= 640px
    1024: {
      slidesPerView: 3,
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
  autoHeight: true,
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
const researchSwiper = new Swiper(".research-slider", {
  speed: 400,
  slidesPerView: 2,
  loop: true,
  spaceBetween: 30,
  navigation: {
    nextEl: ".research-button-next",
    prevEl: ".research-button-prev",
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

let currentModal; // Текущее модальное окно
let modalDialog; // Белое диалоговое окно
let alertModal = document.querySelector("#alert-modal"); // Окно с предупреждением

const modalButtons = document.querySelectorAll("[data-toggle=modal]"); // Пререключатель модальных окон.
modalButtons.forEach((button) => {
  /* Клик по переключателю */
  button.addEventListener("click", (event) => {
    event.preventDefault();
    /* Определяем текущее открытое окно */
    currentModal = document.querySelector(button.dataset.target);
    /* Открываем текущее окно */
    currentModal.classList.toggle("is-open");
    modalDialog = currentModal.querySelector(".modal-dialog");
    currentModal.addEventListener("click", (event) => {
      if (!event.composedPath().includes(modalDialog)) {
        currentModal.classList.remove("is-open");
      }
    });
  });
});

document.addEventListener("keyup", (event) => {
  if (event.key == "Escape" && currentModal.classList.contains("is-open")) {
    currentModal.classList.toggle("is-open");
  }
});

const forms = document.querySelectorAll("form");
forms.forEach((form) => {
  const validation = new JustValidate(form, {
    errorFieldCssClass: "is-invalid",
  });
  validation
    .addField("[name=username]", [
      {
        rule: "required",
        errorMessage: "Укажите имя",
      },
      {
        rule: "maxLength",
        value: 50,
        errorMessage: "Максимально 50 символов",
      },
    ])
    .addField("[name=userphone]", [
      {
        rule: "required",
        errorMessage: "Укажите телефон",
      },
    ])
    .onSuccess((event) => {
      const thisForm = event.target;
      const formData = new FormData(thisForm);
      const ajaxSend = (formData) => {
        fetch(thisForm.getAttribute("action"), {
          method: thisForm.getAttribute("method"),
          body: formData,
        }).then((responce) => {
          if (responce.ok) {
            thisForm.reset();
            currentModal.classList.remove("is-open");
            alertModal.classList.add("is-open");
            currentModal = alertModal;
            modalDialog = currentModal.querySelector(".modal-dialog");
            currentModal.addEventListener("click", (event) => {
              if (!event.composedPath().includes(modalDialog)) {
                currentModal.classList.remove("is-open");
              }
            });
          } else {
            alert("Ошибка. Текст ошибки:  ".responce.statusText);
          }
        });
      };
      ajaxSend(formData);
    });
});

/* Создаем префикс +7, даже если вводят 8 или 9 */
const prefixNumber = (str) => {
  /* если вводят семерку, добавляем ей скобку */
  if (str === "7") {
    return "7 (";
  }
  /* если вводят восьмерку, ставим вместо нее +7 ( */
  if (str === "8") {
    return "+7 (";
  }
  /* если пишут девятку, заменяем на +7 (9  */
  if (str === "9") {
    return "7 (9";
  }
  /* в других случаях просто 7 (  */
  return "7 (";
}; /* профикс в любом раскладе будет +7 () */

/* Ловим события ввода в любом поле */
document.addEventListener("input", (e) => {
  /* Проверяем, что это поле имеет класс phone-mask */
  if (e.target.classList.contains("phone-mask")) {
    /* поле с телефоном помещаем в переменную input */
    const input = e.target;
    /* вставляем плюс в начале номера */
    const value = input.value.replace(/\D+/g, "");
    /* длинна номера 11 символов */
    const numberLength = 11;

    /* Создаем переменную, куда будем записывать номер */
    let result;
    /* Если пользователь ввел 8... */
    if (input.value.includes("+8") || input.value[0] === "8") {
      /* Стираем восьмерку */
      result = "";
    } else {
      /* Оставляем плюсик в поле */
      result = "+";
    }

    /* Запускаем цикл, где переберем каждую цифру от 0 до 11 */
    for (let i = 0; i < value.length && i < numberLength; i++) {
      switch (i) {
        case 0:
          /* в самом начале ставим префикс +7 ( */
          result += prefixNumber(value[i]);
          continue;
        case 4:
          /* добавляем после "+7 (" круглую скобку ")" */
          result += ") ";
          break;
        case 7:
          /* дефис после 7 символа */
          result += "-";
          break;
        case 9:
          /* еще дефис  */
          result += "-";
          break;
        default:
          break;
      }
      /* на каждом шаге цикла добавляем новую цифру к номеру */
      result += value[i];
    }
    /* итог: номер в формате +7 (999) 123-45-67 */
    input.value = result;
  }
});
// Функция замены фавикона в зависимости от темы браузера работает не во всех браузерах
function changeFavicon() {
  const favicon = document.getElementById("favicon");
  const isDarkMode = window.matchMedia && window.matchMedia("(prefers-color-scheme: dark)").matches;

  let faviconPath;

  if (isDarkMode) {
    faviconPath = "favicon-light.png"; // для тёмной темы
  } else {
    faviconPath = "favicon.png"; // для светлой темы
  }

  // Добавляем уникальный параметр к URL, чтобы избежать кэширования
  favicon.href = faviconPath + "?v=" + new Date().getTime();
}

// Слушаем изменения темы
window.matchMedia("(prefers-color-scheme: dark)").addEventListener("change", changeFavicon);

// Изначально вызываем функцию для установки правильного фавикона
changeFavicon();
