const menuIcon = document.querySelector('.menu-icon');
const menuList = document.querySelector('nav ul');

menuIcon.addEventListener('click', () => {
  menuList.classList.toggle('show');
});
