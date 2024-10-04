// Seleccionamos el botón de cerrar y el anuncio
const cerrarBtn = document.getElementById("cerrar-btn");
const anuncio = document.getElementById("anuncio");

// Evento para cerrar el anuncio cuando se hace clic en el botón
cerrarBtn.addEventListener("click", function() {
    anuncio.style.display = "none";
});