<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Editar Plataforma</title>
  <!-- Bootstrap + Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="/src/Views/Platform/PlatformStyles/update_form.css">
</head>
<body>

  <div class="form-container">
    <h2><i class="bi bi-pencil-square"></i> Editar Plataforma</h2>
    <form method="POST" action="/platforms/<?php echo $data["platform"]->id(); ?>">
      <input class="form-control" placeholder="Nombre de la plataforma" type="text" name="name"
             value="<?php echo $data["platform"]->name(); ?>" required>

      <input class="form-control" placeholder="URL del logo (imagen)" type="text" name="logo"
             value="<?php echo $data["platform"]->logo(); ?>" required>

      <input class="form-control" placeholder="Sitio web oficial" type="text" name="website"
             value="<?php echo $data["platform"]->website(); ?>" required>

      <button class="btn btn-primary btn-submit" type="submit">
        <i class="bi bi-save"></i> Guardar cambios
      </button>
    </form>
  </div>

</body>
</html>
