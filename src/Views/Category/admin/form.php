<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Crear Categoría</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="/src/Views/Category/CategoryStyles/form.css">
</head>
<body>

  <div class="form-container">
    <h2><i class="bi bi-tags-fill"></i> Nueva Categoria</h2>
    <form method="POST" action="/categorys">
      <input class="form-control" placeholder="Nombre de la categoría" type="text" name="name" required>
      <button class="btn btn-success btn-submit" type="submit">
        <i class="bi bi-plus-circle-fill"></i> Crear categoria
      </button>
    </form>
  </div>

</body>
</html>
