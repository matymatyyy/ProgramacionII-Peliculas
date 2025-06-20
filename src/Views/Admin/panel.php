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
            <button id="toggleButton"><</button>
            <!-- Contenido del panel izquierdo -->
            <div class="content">
                <h2>Panel Izquierdo</h2>
                <p>Contenido aquí...</p>
            </div>
        </div>

        <!-- Panel derecho (contenido principal) -->
        <div class="PanelRight">
            <div class="container py-4">
                <h2 class="text-center fw-bold">CRUD completo</h2>

                <div class="card mt-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                    <button class="btn btn-success"><i class="bi bi-person-plus-fill"></i> </button>
                    <h4 class="text-center flex-grow-1">Lista de Peliculas</h4>
                    <input type="text" class="form-control w-25" placeholder="Buscar">
                    </div>

                    <table class="table table-striped align-middle">
                    <thead class="table-light">
                        <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Cédula</th>
                        <th>Cargo</th>
                        <th>Avatar</th>
                        <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>7</td>
                        <td>Camilo</td>
                        <td>30</td>
                        <td>444433</td>
                        <td>Contador</td>
                        <td><img src="https://i.pravatar.cc/30?img=5" class="rounded-circle" alt="avatar"></td>
                        <td>
                            <button class="btn btn-success btn-sm"><i class="bi bi-eye"></i></button>
                            <button class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                        </td>
                        </tr>
                        <!-- Más filas aquí -->
                    </tbody>
                    </table>

                    <div class="d-flex justify-content-between align-items-center">
                    <span>Mostrando registros del 1 al ? de un total de ? registros</span>
                    <nav>
                        <ul class="pagination mb-0">
                        <li class="page-item"><a class="page-link" href="#">Primero</a></li>
                        <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
                        <li class="page-item"><a class="page-link" href="#">Último</a></li>
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