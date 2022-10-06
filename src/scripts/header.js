if (currentPage !== 'home') header.classList.add('header--contrast');

GetHeight(header);
window.addEventListener('resize', () => GetHeight(header));

function GetHeight(target) {
  const height = target.offsetHeight;
  document.documentElement.style.setProperty('--header-height', height + 'px');
}