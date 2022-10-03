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