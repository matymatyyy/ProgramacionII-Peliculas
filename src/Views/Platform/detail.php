<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Detalle de Plataforma</title>
  <!-- Bootstrap + Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="/src/Views/Platform/PlatformStyles/detail.css">
</head>
<body>

  <div class="detail-container">
    <h2><i class="bi bi-display"></i> Detalle de Plataforma</h2>

    <div class="detail-item">
      <span class="detail-label">ID:</span>
      <?php echo $data["platform"]->id(); ?>
    </div>

    <div class="detail-item">
      <span class="detail-label">Nombre:</span>
      <?php echo $data["platform"]->name(); ?>
    </div>

    <div class="detail-item">
      <span class="detail-label">Logo:</span><br>
      <img class="logo-preview" src="<?php echo $data["platform"]->logo(); ?>" alt="Logo de plataforma">
    </div>

    <div class="detail-item">
      <span class="detail-label">Sitio Web:</span>
      <a href="<?php echo $data["platform"]->website(); ?>" target="_blank">
        <?php echo $data["platform"]->website(); ?>
      </a>
    </div>

    <div class="text-center mt-4">
      <a href="/admin/panelPlatform/1" class="btn btn-secondary">
        <i class="bi bi-arrow-left"></i> Volver al listado
      </a>
    </div>
  </div>

</body>
</html>
