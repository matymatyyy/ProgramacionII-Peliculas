<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Crear Plataforma</title>
  <!-- Bootstrap + Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="/src/Views/Platform/PlatformStyles/form.css">
</head>
<body>
<a href="/admin/panelPlatform/1" class="btn btn-outline-secondary btn-sm position-absolute" style="top: 0.5rem; right: 0.5rem;">
  <i class="bi bi-arrow-left"></i> Volver
</a>
  <div class="form-container">
    <h2><i class="bi bi-tv"></i> Nueva Plataforma</h2>
    <form method="POST" action="/platforms">
      <input class="form-control" placeholder="Nombre de la plataforma" type="text" name="name" required>
      <input class="form-control" placeholder="URL del logo (imagen)" type="text" name="logo" required>
      <input class="form-control" placeholder="Sitio web oficial" type="text" name="website" required>
      
      <button class="btn btn-success btn-submit" type="submit">
        <i class="bi bi-plus-circle-fill"></i> Crear plataforma
      </button>
    </form>
  </div>

</body>
</html>
