const panelLeft = document.getElementById("panelLeft");
const toggleButton = document.getElementById("arrow");

toggleButton.addEventListener("click", () => {
    panelLeft.classList.toggle("collapsed");

    // Cambiar el icono del botón
    if (panelLeft.classList.contains("collapsed")) {
        toggleButton.classList.remove("bi-arrow-bar-left");
        toggleButton.classList.add("bi-arrow-bar-right");
    } else {
        toggleButton.classList.remove("bi-arrow-bar-right");
        toggleButton.classList.add("bi-arrow-bar-left");
    }
});
