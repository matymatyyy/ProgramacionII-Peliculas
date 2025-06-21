<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Editar Categoría</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="/src/Views/Category/CategoryStyles/update_form.css">
</head>
<body>

  <div class="form-container">
    <h2><i class="bi bi-pencil-square"></i> Editar Categoria</h2>
    <form method="POST" action="/categorys/<?php echo $data["category"]->id() ?>">
      <input class="form-control" placeholder="Nombre de la categoría" type="text" name="name"
             value="<?php echo $data["category"]->name() ?>" required>
      <button class="btn btn-primary btn-submit" type="submit">
        <i class="bi bi-save"></i> Guardar cambios
      </button>
    </form>
  </div>

</body>
</html>
