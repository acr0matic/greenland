const catalogSlider = document.querySelectorAll('.slider-catalog');

if (catalogSlider)
catalogSlider.forEach(slider => {
  const container = slider.closest('.slider');

  new Swiper(slider, {
    simulateTouch: false,
    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },

    pagination: {
      el: container.querySelector('.swiper-pagination'),
      clickable: true,
    },

    navigation: {
      nextEl: container.querySelector('.swiper-button-next'),
      prevEl: container.querySelector('.swiper-button-prev'),
    },

    a11y: {
      enabled: false,
    },
  });
});

const serviceSlider = document.querySelector('.slider-service');
if (serviceSlider)
  new Swiper(serviceSlider, {
    slidesPerView: 3,
    simulateTouch: false,
    spaceBetween: 32,

    navigation: {
      nextEl: serviceSlider.parentNode.querySelector('.swiper-button-next'),
      prevEl: serviceSlider.parentNode.querySelector('.swiper-button-prev'),
    },

    a11y: {
      enabled: false,
    },
  });

