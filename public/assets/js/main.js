const toggleMenuButton = document.getElementById('toggle-menu');
const mobileNav = document.getElementById('mobile-nav');

toggleMenuButton.addEventListener('click', e => {
  mobileNav.classList.toggle('hidden-menu');

  const menuIcons = toggleMenuButton.getElementsByTagName('img');
  menuIcons[0].classList.toggle('hidden');
  menuIcons[1].classList.toggle('hidden');
});
