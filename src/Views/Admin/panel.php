<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/Views/Admin/AdminStyles/panel.css">
    <title>Panel</title>
</head>
<body>

    <div class="All">
        <!-- Panel izquierdo (ocultable) -->
        <div class="PanelLeft" id="panelLeft">
            <button id="toggleButton">Ocultar</button>
            <!-- Contenido del panel izquierdo -->
            <div class="content">
                <h2>Panel Izquierdo</h2>
                <p>Contenido aquí...</p>
            </div>
        </div>

        <!-- Panel derecho (contenido principal) -->
        <div class="PanelRight">
            <h1>Contenido Principal</h1>
        </div>
    </div>
    <script src="/src/Views/Admin/AdminScript/panel.js"></script>
</body>
</html>