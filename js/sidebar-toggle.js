const toggleBtn = document.getElementById("toggleSidebar");
const desktopSidebar = document.getElementById("sidebar");
const mobileSidebar = document.querySelector(".mobile-sidebar");
const mobileOverlay = document.querySelector(".mobile-overlay");

// Toggle desktop sidebar
function toggleDesktopSidebar() {
  if (desktopSidebar.getAttribute("data-state") === "expanded") {
    desktopSidebar.setAttribute("data-state", "collapsed");
    desktopSidebar.setAttribute("data-collapsible", "icon");
  } else {
    desktopSidebar.setAttribute("data-state", "expanded");
    desktopSidebar.setAttribute("data-collapsible", "expanded");
  }
}

// Toggle mobile sidebar
function toggleMobileSidebar() {
  mobileSidebar.classList.toggle("hidden");
  mobileOverlay.classList.toggle("hidden");

  if (mobileSidebar.classList.contains("hidden")) {
    mobileSidebar.setAttribute("data-state", "closed");
    mobileOverlay.setAttribute("data-state", "closed");
  } else {
    mobileSidebar.setAttribute("data-state", "open");
    mobileOverlay.setAttribute("data-state", "open");
  }
}

// Button click event
toggleBtn.addEventListener("click", () => {
  const isMobile = window.innerWidth < 768;

  if (isMobile) {
    toggleMobileSidebar();
  } else {
    toggleDesktopSidebar();
  }
});

// Close mobile sidebar if click outside
document.addEventListener("click", (e) => {
  const isClickInsideSidebar = mobileSidebar.contains(e.target);
  const isClickOnToggleBtn = toggleBtn.contains(e.target);

  if (
    !isClickInsideSidebar &&
    !isClickOnToggleBtn &&
    !mobileSidebar.classList.contains("hidden")
  ) {
    mobileSidebar.classList.add("hidden");
    mobileOverlay.classList.add("hidden");
    mobileSidebar.setAttribute("data-state", "closed");
    mobileOverlay.setAttribute("data-state", "closed");
  }
});
