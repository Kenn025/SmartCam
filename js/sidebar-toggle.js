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
  const isOpen = mobileSidebar.getAttribute("data-state") === "open";

  if (isOpen) {
    // Close
    mobileSidebar.classList.add("-translate-x-full");
    mobileSidebar.setAttribute("data-state", "closed");

    mobileOverlay.classList.add("opacity-0", "invisible");
    mobileOverlay.classList.remove("opacity-100");
    mobileOverlay.setAttribute("data-state", "closed");
  } else {
    // Open
    mobileSidebar.classList.remove("-translate-x-full");
    mobileSidebar.setAttribute("data-state", "open");

    mobileOverlay.classList.remove("opacity-0", "invisible");
    mobileOverlay.classList.add("opacity-100");
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

// Close when clicking outside the sidebar (not overlay)
document.addEventListener("click", (e) => {
  const isOpen = mobileSidebar.getAttribute("data-state") === "open";
  const isClickInsideSidebar = mobileSidebar.contains(e.target);
  const isClickOnToggleBtn = toggleBtn.contains(e.target);

  if (isOpen && !isClickInsideSidebar && !isClickOnToggleBtn) {
    toggleMobileSidebar(true); // force close
  }
});
