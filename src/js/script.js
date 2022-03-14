window.onscroll = function () {
  var navbar = document.getElementById("navbar");
  if (window.scrollY === 0) {
      navbar.classList.remove("scroll-nav");
  } else {
      navbar.classList.add("scroll-nav");
  }
}

// Navigation toggle
function toggleNav() {
  var navbar = document.getElementById('navbar')
  navbar.classList.toggle("open");
  var navMenu = document.getElementById("nav_menu");
  navMenu.classList.toggle("open");
}