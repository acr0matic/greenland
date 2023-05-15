const catalogSlider = document.querySelectorAll('.slider-catalog');
if (catalogSlider)
  catalogSlider.forEach(slider => {
    const container = slider.closest('.slider');

    new Swiper(slider, {
      speed: 500,
      slidesPerView: 'auto',
      simulateTouch: false,
      spaceBetween: 32,

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

      breakpoints: {
        540: {
          slidesPerView: 1,
        },
      },
    });
  });

const serviceSlider = document.querySelector('.slider-service');
if (serviceSlider)
  new Swiper(serviceSlider, {
    speed: 500,
    slidesPerView: 'auto',
    simulateTouch: false,
    spaceBetween: 32,

    navigation: {
      nextEl: serviceSlider.parentNode.querySelector('.swiper-button-next'),
      prevEl: serviceSlider.parentNode.querySelector('.swiper-button-prev'),
    },

    a11y: {
      enabled: false,
    },

    breakpoints: {
      540: {
        slidesPerView: 2,
      },

      992: {
        slidesPerView: 3,
      },
    },
  });

const restaurantSlider = document.querySelector('.slider-restaurant');
if (restaurantSlider)
  new Swiper(restaurantSlider, {
    speed: 500,
    slidesPerView: 1,
    simulateTouch: false,

    effect: 'fade',
    fadeEffect: {
      crossFade: true,
    },

    pagination: {
      el: restaurantSlider.querySelector('.swiper-pagination'),
      clickable: true,
    },

    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },

    a11y: {
      enabled: false,
    },
  });

const heroSlider = document.querySelector('.slider-hero');
if (heroSlider)
  new Swiper(heroSlider, {
    speed: 500,
    slidesPerView: 1,
    simulateTouch: false,

    effect: 'fade',
    fadeEffect: {
      crossFade: true,
    },

    pagination: {
      el: heroSlider.querySelector('.swiper-pagination'),
      clickable: true,
    },

    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },

    a11y: {
      enabled: false,
    },
  });