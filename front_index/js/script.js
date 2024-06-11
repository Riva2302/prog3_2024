let indice_slide = 0;
const slides = document.querySelectorAll('.carousel_slide');
const indicators = document.querySelectorAll('.indicator');

function iterarSlide(index) {
    slides.forEach((slide, i) => {
        slide.style.display = i === index ? 'block' : 'none';
    });
    indicators.forEach((indicator, i) => {
        indicator.classList.toggle('active', i === index);
    });
}

function rightSlide() {
    indice_slide = (indice_slide + 1) % slides.length;
    iterarSlide(indice_slide);
}

function leftSlide() {
    indice_slide = (indice_slide - 1 + slides.length) % slides.length;
    iterarSlide(indice_slide);
}

function goToSlide(index) {
    indice_slide = index;
    iterarSlide(indice_slide);
}

// Mostrar la primera diapositiva
iterarSlide(indice_slide);

// Cambiar de diapositiva automáticamente cada 10 segundos
setInterval(rightSlide, 10000);



// Funciones de la barra de navegacion
document.addEventListener("DOMContentLoaded", function() {
    var abrirIcon = document.getElementById("abrir");
    var cerrarIcon = document.getElementById("cerrar");
    var menuContainer = document.getElementById("menu-item-container");

    abrirIcon.addEventListener("click", function() {
        menuContainer.style.display="block";
        abrirIcon.style.display = "none";
        cerrarIcon.style.display = "block";
    });

    cerrarIcon.addEventListener("click", function() {
        menuContainer.style.display="none";
        abrirIcon.style.display = "block";
        cerrarIcon.style.display = "none";
    });
});