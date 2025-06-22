<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/Views/Admin/AdminStyles/panel.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Panel</title>
</head>
<body>

    <div class="All">
        <!-- Panel izquierdo (ocultable) -->
    <div class="PanelLeft" id="panelLeft">
    <button id="toggleButton">
        <span class="label">Panel</span>
        <i id="arrow" class="bi bi-arrow-bar-left"></i>
    </button>
    <br><br>
    <div class="content">
        <button class="menu-btn" onclick="window.location.href='http://localhost:91/admin/panel/1'">
        <i class="bi bi-film"></i>
        <span class="label">Películas</span>
        </button>
        <button class="menu-btn" onclick="window.location.href='http://localhost:91/admin/panelCategory/1'">
        <i class="bi bi-list-ul"></i>
        <span class="label">Categorías</span>
        </button>
        <button class="menu-btn" onclick="window.location.href='http://localhost:91/admin/panelPlatform/1'">
        <i class="bi bi-tv"></i>
        <span class="label">Plataformas</span>
        </button>
    </div>  
    </div>

        <!-- Panel derecho (contenido principal) -->
        <div class="PanelRight">
            <div class="container py-4">
                <div class="card mt-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                    <button class="btn btn-success" onclick="window.location.href='http://localhost:91/admin/platforms/create'"><i class="bi bi-plus-circle"></i></button>
                    <h4 class="text-center flex-grow-1">Lista de Plataformas</h4>
                    <input type="text" class="form-control w-25" placeholder="Buscar">
                    </div>

                    <table class="table table-striped align-middle">
                    <thead class="table-light">
                        <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>logo</th>
                        <th>website</th>
                        <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                    </table>

                    <div class="d-flex justify-content-between align-items-center">
                    <span>Mostrando registros del 1 al ? de un total de ? registros</span>
                    <nav>
                        <ul class="pagination mb-0">
                            <p>aca va la paginacion</p>
                        </ul>
                    </nav>
                    </div>

                </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/src/Views/Admin/AdminScript/panel.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</body>
</html>