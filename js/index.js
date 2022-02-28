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
});
