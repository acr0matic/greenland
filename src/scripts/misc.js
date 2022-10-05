const preloader = document.getElementById('loader');

document.addEventListener("DOMContentLoaded", function () {
  window.setTimeout(function () {
    preloader.classList.add('loader--hide');
  }, 150);
});
