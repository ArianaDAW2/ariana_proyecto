import './bootstrap';

let click = document.getElementById('menu-mobile');
let menu = document.getElementById('menu');
menu.classList.toggle('hidden');
click.addEventListener('click', () => {
    menu.classList.toggle('hidden');
});

let overlay = document.getElementById("overlay");
document.querySelectorAll(".gallery_img").forEach(img => {
    img.addEventListener("click", () => {
        overlay.classList.toggle('hidden')
        img.classList.toggle("fullscreen");
    });
});

