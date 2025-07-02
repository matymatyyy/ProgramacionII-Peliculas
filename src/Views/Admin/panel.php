<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/Views/Admin/AdminStyles/panel.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Panel Peliculas</title>
</head>

<body>
    <a href="/admin/logout" class="btn btn-outline-secondary btn-sm position-absolute"
        style="top: 0.5rem; right: 0.5rem;">
        <i class="bi bi-arrow-left"></i> Cerrar Sesion
    </a>
    <div class="All">

        <div class="PanelLeft" id="panelLeft">
            <button id="toggleButton">
                <span class="label">Panel</span>
                <i id="arrow" class="bi bi-arrow-bar-left"></i>
            </button>
            <br><br>
            <div class="content">
                <button class="menu-btn" onclick="window.location.href='http://localhost:91/admin/panel/1'">
                    <i class="bi bi-film"></i>
                    <span class="label">Peliculas</span>
                </button>
                <button class="menu-btn" onclick="window.location.href='http://localhost:91/admin/panelCategory/1'">
                    <i class="bi bi-list-ul"></i>
                    <span class="label">Categorias</span>
                </button>
                <button class="menu-btn" onclick="window.location.href='http://localhost:91/admin/panelPlatform/1'">
                    <i class="bi bi-tv"></i>
                    <span class="label">Plataformas</span>
                </button>
            </div>
        </div>


        <div class="PanelRight">
            <div class="container py-4">
                <div class="card mt-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3">
                            <button class="btn btn-success"
                                onclick="window.location.href='http://localhost:91/admin/entertainments/create'"><i
                                    class="bi bi-plus-circle"></i></button>
                            <h4 class="text-center flex-grow-1">Lista de Peliculas</h4>
                            <input type="text" class="form-control w-25" placeholder="Buscar">
                        </div>

                        <table class="table table-striped align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>tipo</th>
                                    <th>final</th>
                                    <th>fecha de saldia</th>
                                    <th>imagen</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data["entertaiments"] as $entertaiments) { ?>
                                    <tr>
                                        <td><?php echo $entertaiments->id() ?></td>
                                        <td><?php echo $entertaiments->name() ?></td>
                                        <td><?php echo $entertaiments->type() ?></td>
                                        <td><?php echo $entertaiments->ending() ?></td>
                                        <td><?php echo $entertaiments->release_date()->format("d/m/Y") ?></td>
                                        <td><img src="<?php echo $entertaiments->image() ?>" class="rounded-circle"
                                                alt="avatar"></td>
                                        <td>
                                            <button class="btn btn-success btn-sm"
                                                onclick="window.location.href='http://localhost:91/entertainments/<?php echo $entertaiments->id() ?>'"><i
                                                    class="bi bi-eye"></i></button>
                                            <button class="btn btn-warning btn-sm"
                                                onclick="window.location.href='http://localhost:91/admin/entertainments/update/<?php echo $entertaiments->id() ?>'"><i
                                                    class="bi bi-pencil"></i></button>
                                            <button class="btn btn-danger btn-sm"
                                                onclick="eliminarItem(<?php echo $entertaiments->id() ?>,1)"><i
                                                    class="bi bi-trash"></i></button>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                        <div class="d-flex justify-content-between align-items-center">
                            <span>
                                Mostrando registros del
                                <?php echo 1 + 6 * ($data["page"] - 1); ?>
                                al
                                <?php echo 6 * ($data["page"] - 1) + count($data["entertaiments"]); ?>
                            </span>
                            <nav>
                                <ul class="pagination mb-0">
                                    <?php $page = $data["page"];
                                    if ($page > 1) { ?>
                                        <li class="page-item"><a class="page-link" href="
                               <?php echo "http://localhost:91/admin/panel/" . $page - 1 ?>">Anterior</a></li>
                                    <?php } ?>
                                    <li class="page-item active"><a class="page-link" href="#"><?php echo $page ?></a>
                                    </li>
                                    <?php if (count($data["entertaiments"]) > 5) { ?>
                                        <li class="page-item"><a class="page-link"
                                                href="<?php echo "http://localhost:91/admin/panel/" . $page + 1 ?>">Siguiente</a>
                                        </li>
                                    <?php } ?>
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