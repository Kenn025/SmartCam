const notifBtn = document.getElementById("notifBtn");
const notifMenu = document.getElementById("notifMenu");

notifBtn.addEventListener("click", () => {
  const isOpen = notifMenu.classList.contains("opacity-100");

  if (isOpen) {
    notifMenu.classList.remove(
      "opacity-100",
      "scale-100",
      "pointer-events-auto"
    );
    notifMenu.classList.add("opacity-0", "scale-95", "pointer-events-none");
  } else {
    notifMenu.classList.remove("opacity-0", "scale-95", "pointer-events-none");
    notifMenu.classList.add("opacity-100", "scale-100", "pointer-events-auto");
  }
});

// Close when clicking outside
document.addEventListener("click", (e) => {
  if (!notifBtn.contains(e.target) && !notifMenu.contains(e.target)) {
    notifMenu.classList.remove(
      "opacity-100",
      "scale-100",
      "pointer-events-auto"
    );
    notifMenu.classList.add("opacity-0", "scale-95", "pointer-events-none");
  }
});
