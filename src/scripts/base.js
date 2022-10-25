const isSafari = /^((?!chrome|android).)*safari/i.test(navigator.userAgent);
const isTablet = window.matchMedia('(max-width: 1200px)').matches;
const isMobile = window.matchMedia('(max-width: 576px)').matches;

const scrollParams = {
  speed: 500,
  speedAsDuration: true,
  offset: 185,
  updateURL: false,
}

const modalParams = {
  awaitCloseAnimation: true,
  disableFocus: true,
}

if (isTablet) scrollParams.offset = 140;
if (isMobile) scrollParams.offset = 100;


const header = document.getElementById('header');
const currentPage = document.querySelector('main').id;