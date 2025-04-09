const buttonThemeToggle = document.querySelector("#theme-toggle");
const body = document.body;
const saveTheme = localStorage.getItem("theme");
const closeButtons = document.querySelectorAll('.btn-close[data-bs-dismiss="alert"]');

if (saveTheme === "dark") {
  body.classList.remove("light-theme");
  body.classList.add("dark-theme");
} else {
  body.classList.remove("dark-theme");
  body.classList.add("light-theme");
}

buttonThemeToggle.addEventListener("click", () => {
  if (body.classList.contains("light-theme")) {
    body.classList.remove("light-theme");
    body.classList.add("dark-theme");
    localStorage.setItem("theme", "dark");
  } else {
    body.classList.remove("dark-theme");
    body.classList.add("light-theme");
    localStorage.setItem("theme", "light");
  }
});

closeButtons.forEach(function (button) {
  button.addEventListener("click", function (e) {
    e.preventDefault();

    const alert = this.closest(".alert");

    if (alert) {
      alert.classList.add("fade");

      const handleTransitionEnd = () => {
        alert.remove();
        alert.removeEventListener("transitionend", handleTransitionEnd);
      };

      alert.addEventListener("transitionend", handleTransitionEnd);

      alert.classList.remove("show");
    }
  });
});
