// Show Password Toggle
const passwordInput = document.getElementById("password");
const toggleButton = document.getElementById("showPassword");
const eyeIcon = document.getElementById("eyeIcon");

toggleButton.addEventListener("click", () => {
  const isPassword = passwordInput.type === "password";
  passwordInput.type = isPassword ? "text" : "password";

  eyeIcon.innerHTML = isPassword
    ? `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.97 10.97 0 0112 19c-6.5 0-10-7-10-7a16.88 16.88 0 013.49-4.75m4.59-2.71A10.97 10.97 0 0112 5c6.5 0 10 7 10 7a16.85 16.85 0 01-3.49 4.75M3 3l18 18"/>`
    : `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7-10-7-10-7z" />`;
});

// Show Accordion for User Management
function toggleMenu(button) {
  const li = button.closest("li");
  const submenu = li.querySelector(".submenu");
  const chevron = button.querySelector(".lucide-chevron-right");
  const items = submenu.querySelectorAll(".submenu-item");

  if (!submenu.classList.contains("open")) {
    // Open
    submenu.classList.add("open");
    submenu.style.height = submenu.scrollHeight + "px";
    submenu.style.transition =
      "height 0.4s ease, opacity 0.4s ease, border 0.4s ease";
    submenu.classList.remove("opacity-0", "border-opacity-0");
    submenu.classList.add("opacity-100", "border-opacity-100");
    chevron.classList.add("rotate-90");

    items.forEach((item, i) => {
      setTimeout(() => {
        item.classList.add("transition-all", "duration-400", "ease-out");
        item.classList.remove("opacity-0", "-translate-y-1");
      }, i * 120);
    });

    submenu.addEventListener("transitionend", function handler(e) {
      if (e.propertyName === "height") {
        submenu.style.height = "auto";
        submenu.removeEventListener("transitionend", handler);
      }
    });
  } else {
    // Close
    submenu.style.height = submenu.scrollHeight + "px";
    submenu.offsetHeight;
    submenu.style.height = "0px";
    submenu.classList.remove("opacity-100", "border-opacity-100");
    submenu.classList.add("opacity-0", "border-opacity-0");
    chevron.classList.remove("rotate-90");
    submenu.classList.remove("open");

    // Hide items quickly
    items.forEach((item) => {
      item.classList.add("opacity-0", "-translate-y-1");
    });
  }
}
