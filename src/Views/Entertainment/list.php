<html>

<head>
    <link rel="stylesheet" href="/src/Views/Entertainment/EntertainmentStyles/list.css">
</head>

<body>
    <!-- falta hacer un carrusel de peliculas -->
    <!-- las imagenes las sacamos de https://es.wallpapers.com/imagenes-de-peliculas -->
    <?php include_once("shared/navBar.php") ?>
    <div class="seccion">
        <h2 class="movies-title">Películas de moda</h2>
        <div class="content">
            <?php foreach ($data["entertaiments"] as $entertaiments) { ?>
                <a href="/entertainments/<?php echo $entertaiments->id() ?>">
                    <img class="img-content" src="<?php echo $entertaiments->image() ?>">
                </a> <br>
            <?php } ?>
        </div>
    </div>
    <div class="seccion">
        <h2 class="movies-title">Películas de accion</h2>
        <div class="content">
            <?php foreach ($data["entertaiments"] as $entertaiments) { ?>
                <a href="/entertainments/<?php echo $entertaiments->id() ?>">
                    <img class="img-content" src="<?php echo $entertaiments->image() ?>">
                </a> <br>
            <?php } ?>
        </div>
    </div>
    <div class="seccion">
        <h2 class="movies-title">Películas de horror</h2>
        <div class="content">
            <?php foreach ($data["entertaiments"] as $entertaiments) { ?>
                <a href="/entertainments/<?php echo $entertaiments->id() ?>">
                    <img class="img-content" src="<?php echo $entertaiments->image() ?>">
                </a> <br>
            <?php } ?>
        </div>
    </div>
    <?php include_once("shared/footer.php") ?>
</body>

</html>