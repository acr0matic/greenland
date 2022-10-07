if (currentPage !== 'home') header.classList.add('header--contrast');

GetHeight(header);
window.addEventListener('resize', () => GetHeight(header));

function GetHeight(target) {
  const height = target.offsetHeight;
  document.documentElement.style.setProperty('--header-height', height + 'px');
}

const mobile = header.querySelector('#mobile-menu');
const mobileNav = mobile.querySelectorAll('.nav__link');
const burger = header.querySelector('.hamburger');

burger.addEventListener('click', () => Menu());

mobileNav.forEach(link => {
  link.addEventListener('click', () => Menu());
});

function Menu() {
  mobile.classList.toggle('mobile-menu--open');
  burger.classList.toggle('is-active')
}