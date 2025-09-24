// Edit User

const editModal = document.getElementById("editModal");
const editModalCard = editModal.querySelector(".bg-white");
const closeEditBtn = document.getElementById("closeEditModal");
const editUserBtn = document.getElementById("editUser");

function openEditModal() {
  editModal.classList.remove("hidden");
  requestAnimationFrame(() => {
    editModal.classList.remove("opacity-0");
    editModalCard.classList.remove("scale-95");
  });
}

function closeEditModal() {
  editModal.classList.add("opacity-0");
  editModalCard.classList.add("scale-95");
  setTimeout(() => editModal.classList.add("hidden"), 200);
}

editUserBtn.addEventListener("click", openEditModal);
closeEditBtn.addEventListener("click", closeEditModal);
editModal.addEventListener("click", (e) => {
  if (e.target === editModal) closeEditModal();
});
