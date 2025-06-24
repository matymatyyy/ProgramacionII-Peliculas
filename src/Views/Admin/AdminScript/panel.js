const panelLeft = document.getElementById("panelLeft");
const toggleButton = document.getElementById("arrow");

toggleButton.addEventListener("click", () => {
    panelLeft.classList.toggle("collapsed");

    if (panelLeft.classList.contains("collapsed")) {
        toggleButton.classList.remove("bi-arrow-bar-left");
        toggleButton.classList.add("bi-arrow-bar-right");
    } else {
        toggleButton.classList.remove("bi-arrow-bar-right");
        toggleButton.classList.add("bi-arrow-bar-left");
    }
});

function eliminarItem(id, type) {
  if (!confirm("¿Estas seguro de eliminar el item " + id + "?")) return;
  let entidad = "";
  switch (type) {
    case 1:
      entidad = "entertainments"
      break;
    case 2:
      entidad = "categorys"
      break;
    case 3:
      entidad = "platforms"
      break;
    default:
      break;
  }
  fetch('http://localhost:91/'+entidad+'/delete', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded'
    },
    body: 'id=' + id
  })
  .then(response => response.json())
  .then(data => {
    if (data.success) {
      alert('Eliminado con éxito');
      location.reload(); 
    } else {
      alert('Error al eliminar: ' + data.message);
    }
  })
  .catch(error => {
    console.error('Error en la petición:', error);
    alert('Ocurrió un error inesperado');
  });
}