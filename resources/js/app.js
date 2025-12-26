import './bootstrap';

let click = document.getElementById('menu-mobile');
let menu = document.getElementById('menu');
menu.classList.toggle('hidden');
click.addEventListener('click', () => {
    menu.classList.toggle('hidden');
});
