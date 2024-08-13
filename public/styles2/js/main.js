const $button  = document.querySelector('#sidebar-toggle');
const $wrapper = document.querySelector('#wrapper');

const sideImg = document.getElementById("sideImg");
const sidebarNav = document.querySelector(".sidebar-nav");

const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))


$button.addEventListener('click', (e) => {
  e.preventDefault();
  $wrapper.classList.toggle('toggled');

  
  
});

function toggleZoomScreen() {
  document.body.style.zoom = "80%";
} 

toggleZoomScreen()




