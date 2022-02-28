window.addEventListener("DOMContentLoaded", (event) => {
  let cases = new Swiper(".cases-slider", {
    grabCursor: true,
    // centeredSlides: true,
    slidesPerView: 2,
    spaceBetween: 40,
    slidesPerView: "auto",
    effect: "creative",
    creativeEffect: {
      prev: {
        translate: ["-105%", 0, 0],
        opacity: 0.3,
      },
      next: {
        translate: ["105%", 0, 0],
        opacity: 0.3,
      },
      limitProgress: 2,
    },
    navigation: {
      nextEl: ".cases-slider__button-next",
      prevEl: ".cases-slider__button-prev",
    },
    scrollbar: {
      el: ".cases-slider__scrollbar",
      draggable: true,
    },
  });

  let reviews = new Swiper(".reviews-slider", {
    grabCursor: true,
    // centeredSlides: true,
    slidesPerView: 2,
    spaceBetween: 40,
    slidesPerView: "auto",
    effect: "creative",
    creativeEffect: {
      prev: {
        translate: ["-105%", 0, 0],
        opacity: 0.3,
      },
      next: {
        translate: ["105%", 0, 0],
        opacity: 0.3,
      },
      limitProgress: 2,
    },
    navigation: {
      nextEl: ".reviews-slider__button-next",
      prevEl: ".reviews-slider__button-prev",
    },
    scrollbar: {
      el: ".reviews-slider__scrollbar",
      draggable: true,
    },
  });

  let el = document.querySelector(".cases-case__img");
  let pz = new PinchZoom(el);

  var win = window,
    lockOrientation =
      win.screen.lockOrientation ||
      win.screen.mozLockOrientation ||
      win.screen.msLockOrientation ||
      function () {
        return null;
      };

  if (lockOrientation) {
    /**
     * Parameters
     * [ portrait-primary, portrait-secondary, landscape-primary, landscape-secondary, portrait, landscape, default ]
     */
    lockOrientation("portrait");
  }
});
