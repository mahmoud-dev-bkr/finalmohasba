const $button = document.querySelector("#sidebar-toggle");
const $wrapper = document.querySelector("#wrapper");

const sideImg = document.getElementById("sideImg");
const sidebarNav = document.querySelector(".sidebar-nav");

const tooltipTriggerList = document.querySelectorAll(
  '[data-bs-toggle="tooltip"]'
);
const tooltipList = [...tooltipTriggerList].map(
  (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
);

$button.addEventListener("click", (e) => {
  e.preventDefault();
  $wrapper.classList.toggle("toggled");
});

function toggleZoomScreen() {
  document.body.style.zoom = "80%";
}

toggleZoomScreen();

// Accordion Action
const accordionItem = document.querySelectorAll(".clicked-item");

accordionItem.forEach((el) =>
  el.addEventListener("click", () => {
    if (el.classList.contains("active")) {
      el.classList.remove("active");
    } else {
      accordionItem.forEach((el2) => el2.classList.remove("active"));
      el.classList.add("active");
    }
  })
);
