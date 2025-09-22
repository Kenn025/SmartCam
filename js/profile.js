const profileBtn = document.getElementById("profileMenuBtn");
const profileMenu = document.getElementById("profileMenu");

profileBtn.addEventListener("click", () => {
  const isOpen = profileMenu.classList.contains("opacity-100");

  if (isOpen) {
    // Close
    profileMenu.classList.remove(
      "opacity-100",
      "scale-100",
      "pointer-events-auto"
    );
    profileMenu.classList.add("opacity-0", "scale-95", "pointer-events-none");
  } else {
    // Open
    profileMenu.classList.remove(
      "opacity-0",
      "scale-95",
      "pointer-events-none"
    );
    profileMenu.classList.add(
      "opacity-100",
      "scale-100",
      "pointer-events-auto"
    );
  }
});

// Close dropdown when clicking outside
document.addEventListener("click", (e) => {
  if (!profileBtn.contains(e.target) && !profileMenu.contains(e.target)) {
    profileMenu.classList.remove(
      "opacity-100",
      "scale-100",
      "pointer-events-auto"
    );
    profileMenu.classList.add("opacity-0", "scale-95", "pointer-events-none");
  }
});
