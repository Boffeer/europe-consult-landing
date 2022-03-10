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

  poppa({
    pop: ".pop-callback",
    clickTrigger: ".header__contact",
  });

  let casesPopupSlider;
  const casesPics = document.querySelectorAll(".cases-case__pic");
  const casesSliders = document.querySelectorAll(".cases-popup-slider");

  poppa({
    pop: ".cases-popup",
    clickTrigger: ".cases-case__pic",
    onOpen() {
      casesPopupSlider = new Swiper(".cases-popup-slider", {
        grabCursor: true,
        navigation: {
          nextEl: ".cases-popup-slider__button-next",
          prevEl: ".cases-popup-slider__button-prev",
        },
        pagination: {
          el: ".cases-popup-slider__pagination",
        },
        // allowSlideNext: false,
        // allowSlidePrev: false,
      });
    },
    onClose() {
      casesPopupSlider = null;
      casesSliders.forEach((slider) => {
        slider.style.display = "block";
      });
    },
  });
  const casesPopupSliderNext = document.querySelectorAll(
    ".cases-popup-slider__button-next"
  );
  casesPopupSliderNext.forEach((button) => {
    button.addEventListener("click", () => {
      // casesPopupSlider.allowSlideNext = true;
      // casesPopupSlider.slideNext();
      // casesPopupSlider.allowSlideNext = false;
    });
  });

  const casesPopupSliderPrev = document.querySelectorAll(
    ".cases-popup-slider__button-prev"
  );
  casesPopupSliderPrev.forEach((button) => {
    button.addEventListener("click", () => {
      // casesPopupSlider.allowSlidePrev = true;
      // casesPopupSlider.slidePrev();
      // casesPopupSlider.allowSlidePrev = false;
    });
  });

  casesPics.forEach((pic) => {
    pic.addEventListener("click", (event) => {
      console.log(event.target);
      let id = event.target.getAttribute("data-case");

      casesSliders.forEach((slider) => {
        console.log(slider.getAttribute("data-case") === id);
        if (slider.getAttribute("data-case") !== id) {
          slider.style.display = "none";
        }
      });
    });
  });
});
