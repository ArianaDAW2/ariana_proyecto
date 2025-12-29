import './bootstrap';

let mobile = document.getElementById('menu_mobile');
let menu = document.getElementById('menu');
mobile.addEventListener('click', () => {
    menu.classList.toggle('not-md:hidden');
});

let overlay = document.getElementById("overlay");
document.querySelectorAll(".gallery_img").forEach(img => {
    img.addEventListener("click", () => {
        overlay.classList.toggle('hidden')
        img.classList.toggle("fullscreen");
    });
});

