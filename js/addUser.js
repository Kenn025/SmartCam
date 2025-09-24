// Add User

const modal = document.getElementById("userModal");
const modalCard = modal.querySelector(".bg-white");
const closeModalBtn = document.getElementById("closeModal");
const addUserBtn = document.getElementById("addUser");

function openModal() {
  modal.classList.remove("hidden");
  requestAnimationFrame(() => {
    modal.classList.remove("opacity-0");
    modalCard.classList.remove("scale-95");
  });
}

function closeModal() {
  modal.classList.add("opacity-0");
  modalCard.classList.add("scale-95");
  setTimeout(() => modal.classList.add("hidden"), 200);
}

addUserBtn.addEventListener("click", openModal);
closeModalBtn.addEventListener("click", closeModal);

modal.addEventListener("click", (e) => {
  if (e.target === modal) closeModal();
});
