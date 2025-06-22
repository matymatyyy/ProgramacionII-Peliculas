<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Editar Plataforma</title>
  <!-- Bootstrap + Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Segoe UI', sans-serif;
    }

    .form-container {
      max-width: 600px;
      margin: 4rem auto;
      padding: 2rem;
      background-color: #fff;
      border-radius: 15px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    .form-container h2 {
      text-align: center;
      margin-bottom: 1.5rem;
    }

    .form-control {
      margin-bottom: 1rem;
    }

    .btn-submit {
      width: 100%;
    }
  </style>
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
