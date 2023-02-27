"use strict";
// Прелоадер при загрузке страницы
window.onload = function () {
  document.body.classList.add("loaded_hiding");
  window.setTimeout(function () {
    document.body.classList.add("loaded");
    document.body.classList.remove("loaded_hiding");
  }, 500);



  // Меню-бургер
  let burger = document.querySelector(".icon-menu");
  if (burger) {
    burger.addEventListener("click", (e) => {
      let burgerMenu = document
        .querySelector(".over-header")
        .classList.toggle("_active");
      document.documentElement.classList.toggle("menu-open");
      document.body.classList.toggle("lock");
    });
  }

  // Свайпер на стартовой секции
  const startSectionSwiper = new Swiper(".slider-start__swiper", {
    spaceBetween: 10,
    slidesPerView: 1,
    grabCursor: true,
    clickable: true,
    autoplay: {
      delay: 3000,
    },
    pagination: {
      el: ".slider-start__pagination",
    },
  });

  const directionSwiper = new Swiper(".direction__swiper", {
    spaceBetween: 25,
    slidesPerView: "auto",
    grabCursor: true,
  });

  const reviewsSwiper = new Swiper(".reviews__swiper", {
    spaceBetween: 30,
    slidesPerView: "auto",
    grabCursor: true,
    centeredSlides: true,
    autoHeight: true,
    pagination: {
      el: ".reviews__pagination",
      type: "fraction",
    },
  });

  // Функция рандомного цвета на пунктах
  const arrColor = ["#D9504A", "#353BE2", "#4CAF50"];
  function arrayRandElement(arr) {
    let rand = Math.floor(Math.random() * arr.length);
    return arr[rand];
  }
  // Применяем функцию рандомного цвета на меню
  let linksMenu = document.querySelectorAll(".over-header__link");
  if (linksMenu.length > 0) {
    linksMenu.forEach((el) => {
      el.addEventListener("mouseover", (e) => {
        el.style.color = `${arrayRandElement(arrColor)}`;
      });
      el.addEventListener("mouseout", (e) => {
        el.style.color = `#23283B`;
      });
    });
  }
  // Применяем функцию рандомного цвета на меню
  const startItem = document.querySelectorAll(".open-new__item");
  if (startItem.length > 0) {
    startItem.forEach((el) => {
      el.addEventListener("mouseover", (e) => {
        el.style.backgroundColor = `${arrayRandElement(arrColor)}`;
      });
      el.addEventListener("mouseout", (e) => {
        el.style.backgroundColor = `#ffffff`;
      });
    });
  }
  // Писатель
  let typed = new Typed(".typed-element", {
    strings: [
      "ОТКРОЙТЕ ДЛЯ СЕБЯ НОВЫЕ ЯЗЫКИ",
      "ПОМОГАЕМ ЗАГОВОРИТЬ НА ЯЗЫКЕ УВЕРЕННО",
    ],
    typeSpeed: 100,
    loop: true,
    backSpeed: 50,
    startDelay: 200,
    shuffle: true,
    showCursor: true,
    cursorChar: "|",
  });


};


// Исчезание шапки при скролле вниз
if (!document.querySelector(".over-header").classList.contains("_active")) {
  let lastScrollValue = 0;
  const defaultOffset = 200;
  const header = document.querySelector(".header");

  const getScrollPosition = () =>
    window.pageYOffset || document.documentElement.scrollTop;
  const containsHideClass = () => header.classList.contains("hide");

  window.addEventListener("scroll", () => {
    if (
      getScrollPosition() > lastScrollValue &&
      !containsHideClass() &&
      getScrollPosition() > defaultOffset
    ) {
      header.classList.add("hide");
    } else if (getScrollPosition() < lastScrollValue && containsHideClass()) {
      header.classList.remove("hide");
    }

    lastScrollValue = getScrollPosition();
  });
}
setTimeout(function() {
    let popup = document.querySelector('.notification-popup .alert');
    popup.style.opacity = 0;
}, 5000);
let animItems = document.querySelectorAll("._anim-items");

if (animItems.length > 0) {
  window.addEventListener("scroll", animOnScroll);
  function animOnScroll(params) {
    animItems.forEach((animItem) => {
      const animItemHeight = animItem.offsetHeight;
      const animItemOffset = offset(animItem).top;
      const animStart = 4;

      let animItemPoint = window.innerHeight - animItemHeight / animStart;
      if (animItemHeight > window.innerHeight) {
        animItemPoint = window.innerHeight - window.innerHeight / animStart;
      }

      if (
        pageYOffset > animItemOffset - animItemPoint &&
        pageYOffset < animItemOffset + animItemHeight
      ) {
        animItem.classList.add("_active-animation");
      } else {
        if (!animItem.classList.contains("_anim-no-hide")) {
          animItem.classList.remove("_active-animation");
        }
      }
    });
  }

  function offset(el) {
    const rect = el.getBoundingClientRect(),
      scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
      scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    return {
      top: rect.top + scrollTop,
      left: rect.left + scrollLeft,
    };
  }
  animOnScroll();
}
// Показ и скрытие пароля
const passwordInput = document.querySelector("#password");
const toggleBtn = document.querySelector("#toggle-btn");
function togglePassword() {
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        toggleBtn.innerText = "Скрыть";
    } else {
        passwordInput.type = "password";
        toggleBtn.innerText = "Показать";
    }
}

toggleBtn.addEventListener("click", togglePassword);
passwordInput.addEventListener("input", function() {
    if (passwordInput.value) {
        toggleBtn.style.opacity = "1";
        toggleBtn.style.visibility = "visible";
    } else {
        toggleBtn.style.opacity = "0";
        toggleBtn.style.visibility = "hidden";
    }
});

const passwordInput1 = document.querySelector("#password_confirmation");
const toggleBtn1 = document.querySelector("#toggle-btn1");
function togglePassword1() {
    if (passwordInput1.type === "password") {
        passwordInput1.type = "text";
        toggleBtn1.innerText = "Скрыть";
    } else {
        passwordInput1.type = "password";
        toggleBtn1.innerText = "Показать";
    }
}

toggleBtn1.addEventListener("click", togglePassword1);
passwordInput1.addEventListener("input", function() {
    if (passwordInput1.value) {
        toggleBtn1.style.opacity = "1";
        toggleBtn1.style.visibility = "visible";
    } else {
        toggleBtn1.style.opacity = "0";
        toggleBtn1.style.visibility = "hidden";
    }
});


var nameField = document.getElementById('name');
var nameMask = IMask(nameField, {
    format: function(value) {
        return value.charAt(0).toUpperCase() + value.slice(1);
    }
});




