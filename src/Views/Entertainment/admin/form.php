<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Crear Entertainment</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="/src/Views/Entertainment/EntertainmentStyles/form.css">
</head>
<body>
<a href="/admin/panel/1" class="btn btn-outline-secondary btn-sm position-absolute" style="top: 0.5rem; right: 0.5rem;">
  <i class="bi bi-arrow-left"></i> Volver
</a>
  <div class="form-container">
    <h2><i class="bi bi-plus-circle"></i> Nueva Pelicula</h2>
    <form method="POST" action="/entertainments">
      <input class="form-control" placeholder="Nombre" type="text" name="name" required>
      <input class="form-control" placeholder="Tipo" type="text" name="type" required>
      <input class="form-control" placeholder="Fecha de salida" type="date" name="release_date" required>
      <input class="form-control" placeholder="Final" type="text" name="ending">
      <input class="form-control" placeholder="Descripción" type="text" name="description">
      <input class="form-control" placeholder="URL de imagen" type="text" name="image">
      <input class="form-control" placeholder="Clasificación" type="number" name="qualification" min="0" max="10">
      
      <button class="btn btn-success btn-submit" type="submit">
        <i class="bi bi-check-circle-fill"></i> Crear
      </button>
    </form>
  </div>
</body>
</html>
