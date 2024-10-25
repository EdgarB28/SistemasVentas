let currentSlide = 0; // Índice de la imagen actual
const images = document.querySelectorAll('.carousel-images img'); // Selecciona todas las imágenes

function showSlide(index) {
    const totalSlides = images.length;
    // Asegura que el índice esté dentro de los límites
    if (index >= totalSlides) {
        currentSlide = 0;
    } else if (index < 0) {
        currentSlide = totalSlides - 1;
    } else {
        currentSlide = index;
    }
    // Mueve las imágenes
    const offset = -currentSlide * 79; // Calcula el desplazamiento
    document.querySelector('.carousel-images').style.transform = `translateX(${offset}vw)`;
}

function moveSlide(direction) {
    showSlide(currentSlide + direction);
}

// Mostrar la primera imagen al cargar
showSlide(currentSlide);




// DESPLAZAMIENTO SUAVE
document.querySelectorAll('.nav-button').forEach(button => {
    button.addEventListener('click', function(event) {
        event.preventDefault(); // Evita el comportamiento por defecto del enlace
        const targetId = this.getAttribute('href').substring(1); // Obtiene el ID de destino
        const targetSection = document.getElementById(targetId);
        if (targetSection) {
            targetSection.scrollIntoView({ 
                behavior: 'smooth' // suavecito
            });
        }
    });
});