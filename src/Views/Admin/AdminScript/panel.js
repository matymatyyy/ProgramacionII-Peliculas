const panelLeft = document.getElementById("panelLeft");
const toggleButton = document.getElementById("toggleButton");

toggleButton.addEventListener("click", () => {
    panelLeft.classList.toggle("collapsed");
    
    // Cambiar el texto del botón
    if (panelLeft.classList.contains("collapsed")) {
        toggleButton.textContent = "Mostrar";
    } else {
        toggleButton.textContent = "Ocultar";
    }
});