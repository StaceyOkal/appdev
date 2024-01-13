const menuIcon = document.querySelector('.menu-icon');
const menuList = document.querySelector('nav ul');
const navitems = document.querySelectorAll('.nav-item')

// menuIcon.addEventListener('click', () => {
//   menuList.classList.toggle('show');
// });

navitems.forEach((item) => {
  item.addEventListener('click', () => {
    // Remove 'active' class from all items
    navitems.forEach((otherItem) => {
      if (otherItem !== item) {
        otherItem.classList.remove('active');
      }
    });

    // Toggle 'active' class for the clicked item
    item.classList.add('active');
  })
})
