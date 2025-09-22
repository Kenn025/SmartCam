const menuBtn = document.getElementById("menu-btn");
const closeBtn = document.getElementById("close-btn");
const mobileMenu = document.getElementById("mobile-menu");
const overlay = document.getElementById("menu-overlay");

// Open Menu
menuBtn.addEventListener("click", () => {
  mobileMenu.classList.remove("translate-x-full");
  overlay.classList.remove("opacity-0", "invisible");
  overlay.classList.add("opacity-100");
});

// Close Menu
function closeMenu() {
  mobileMenu.classList.add("translate-x-full");
  overlay.classList.add("opacity-0", "invisible");
  overlay.classList.remove("opacity-100");
}

closeBtn.addEventListener("click", closeMenu);
overlay.addEventListener("click", closeMenu);
