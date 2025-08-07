const menuToggle = document.getElementById('menu-toggle');
const mobileNav = document.getElementById('mobile-nav');

menuToggle.addEventListener('click', e => {
  console.log('click')
  mobileNav.classList.toggle('hidden');
});