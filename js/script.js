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
