const hamburger = document.getElementById("hamburger");
const navMenu = document.getElementById("navMenu");
const closeBtn = document.getElementById("closeBtn");

hamburger.addEventListener("click", () => {
  navMenu.classList.add("open");
});

closeBtn.addEventListener("click", () => {
  navMenu.classList.remove("open");
});
