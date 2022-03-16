window.addEventListener("DOMContentLoaded", (event) => {
  poppa({
    pop: ".pop-thanks",
  });

  const headerForm = document.querySelector(".pop-callback");
  headerForm.addEventListener("submit", async (event) => {
    console.log("form send");
    event.preventDefault();

    let response = await fetch(`${window.location.origin}/send.php`, {
      method: "POST",
      body: new URLSearchParams(new FormData(headerForm)),
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
    });
    // let result = await response.json();
    // console.log(result);
    closePop(".pop-callback");
    openPop(".pop-thanks");
    setTimeout(() => {
      closePop(".pop-thanks");
    }, 3000);
  });

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
    lazy: true,
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

  // @cases
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
        allowTouchMove: false,
      });
    },
    onClose() {
      casesPopupSlider = null;
      casesSliders.forEach((slider) => {
        slider.style.display = "block";
      });
    },
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
