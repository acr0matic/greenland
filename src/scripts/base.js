const isSafari = /^((?!chrome|android).)*safari/i.test(navigator.userAgent);
const isMobile = window.matchMedia('(max-width: 576px)').matches;

const scrollParams = {
  speed: 500,
  speedAsDuration: true,
  offset: 135,
  updateURL: false,
}

if (isMobile) {
  scrollParams.offset = 100;
}

const header = document.getElementById('header');
const currentPage = document.querySelector('main').id;