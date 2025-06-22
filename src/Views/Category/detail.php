<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Detalle de Categoria</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="/src/Views/Category/CategoryStyles/list.css">
</head>
<body>

  <div class="detail-container">
    <h2><i class="bi bi-tag"></i> Detalle de Categoria</h2>
    
    <div class="detail-item">
      <span class="detail-label">ID:</span>
      <?php echo $data["category"]->id(); ?>
    </div>

    <div class="detail-item">
      <span class="detail-label">Nombre:</span>
      <?php echo $data["category"]->name(); ?>
    </div>
    
    <div class="text-center mt-4">
      <a href="/admin/panelCategory/1" class="btn btn-secondary">
        <i class="bi bi-arrow-left"></i> Volver a la lista
      </a>
    </div>
  </div>

</body>
</html>
