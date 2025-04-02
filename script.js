// Selección de elementos
const slideMenu = document.getElementById('slideMenu');
const openButton = document.getElementById('openSlideMenu');
const closeButton = document.getElementById('closeSlideMenu');

// Evento para abrir el menú
openButton.addEventListener('click', () => {
    slideMenu.style.left = '0'; // Desliza el menú hacia adentro
});

// Evento para cerrar el menú
closeButton.addEventListener('click', () => {
    slideMenu.style.left = '-300px'; // Oculta el menú nuevamente
});

// Evento para cerrar el menú si se hace clic fuera de él
document.addEventListener('click', (e) => {
    if (!slideMenu.contains(e.target) && !openButton.contains(e.target)) {
        slideMenu.style.left = '-300px'; // Oculta el menú si el clic es fuera de él
    }
});
