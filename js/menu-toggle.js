
function toggleMenu() {
    let menu = document.getElementById('menu_mobile');
    let menuIcon = document.getElementById('menu-icon');
    let xIcon = document.getElementById('close-icon');
    menu.classList.toggle('hidden');
    menuIcon.classList.toggle('hidden');
    xIcon.classList.toggle('hidden');
}
