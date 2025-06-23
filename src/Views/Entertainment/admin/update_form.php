<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Editar Entertainment</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="/src/Views/Entertainment/EntertainmentStyles/update_form.css">
</head>
<body>
<a href="/admin/panel/1" class="btn btn-outline-secondary btn-sm position-absolute" style="top: 0.5rem; right: 0.5rem;">
  <i class="bi bi-arrow-left"></i> Volver
</a>
  <div class="form-container">
    <h2><i class="bi bi-pencil-square"></i> Editar Pelicula</h2>
    <form method="POST" action="/entertainments/<?php echo $data["entertainment"]->id() ?>">
      <input class="form-control" placeholder="Nombre" type="text" name="name"
             value="<?php echo $data["entertainment"]->name() ?>" required>
             
      <input class="form-control" placeholder="Tipo" type="text" name="type"
             value="<?php echo $data["entertainment"]->type() ?>" required>
             
      <input class="form-control" placeholder="Fecha de salida" type="date" name="release_date"
             value="<?php echo $data["entertainment"]->release_date()->format("Y-m-d") ?>" required>
             
      <input class="form-control" placeholder="Final" type="text" name="ending"
             value="<?php echo $data["entertainment"]->ending() ?>">
             
      <input class="form-control" placeholder="Descripción" type="text" name="description"
             value="<?php echo $data["entertainment"]->description() ?>">
             
      <input class="form-control" placeholder="Imagen" type="text" name="image"
             value="<?php echo $data["entertainment"]->image() ?>">
             
      <input class="form-control" placeholder="Clasificación" type="number" name="qualification"
             value="<?php echo $data["entertainment"]->qualification() ?>" min="0" max="10">
      
      <button class="btn btn-primary btn-submit" type="submit">
        <i class="bi bi-save"></i> Guardar cambios
      </button>
    </form>
  </div>

</body>
</html>
