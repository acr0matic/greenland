const catalogSlider = document.querySelectorAll('.catalog__slider');

catalogSlider.forEach(slider => {
  new Swiper(slider, {
    simulateTouch: false,
    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },

    pagination: {
      el: slider.querySelector('.swiper-pagination'),
      clickable: true,
    },

    navigation: {
      nextEl: slider.parentNode.querySelector('.swiper-button-next'),
      prevEl: slider.parentNode.querySelector('.swiper-button-prev'),
    },

    a11y: {
      enabled: false,
    },
  });
});

