const lazyLoadInstance = new LazyLoad({
  elements_selector: '.lazy__item, .lazy-item',

  callback_loaded: (trigger) => {
    const container = trigger.closest('.lazy');
    if (container) {
      const loader = container.querySelector('.preloader');
      if (loader) loader.classList.add('preloader--hide');
    }
  },
});

const scrollController = new SmoothScroll('a[href*="#"]', scrollParams);

const tooltip = tippy('[data-tippy-content]', {
  allowHTML: true,
  maxWidth: 320,
  placement: 'right',
  theme: 'flat',
});

const forms = document.querySelectorAll('form');
forms.forEach(form => {
  new Form(form);
});


