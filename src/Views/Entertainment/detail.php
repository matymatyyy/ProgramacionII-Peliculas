<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entertainment</title>
    <link rel="stylesheet" href="/src/Views/Entertainment/EntertainmentStyles/list.css">
</head>

<body>
    <?php include_once("shared/navBar.php") ?>
    <div class="split-screen">

        <div class="left-pane">
            <div>
                <h2><?php echo $data["Entertainment"]->name() ?></h2>
                <h3><?php echo $data["Entertainment"]->description() ?></h3>
                <h3>clasificacion: <?php echo $data["Entertainment"]->qualification() ?></h3>
                <p>plataformas</p>
                <p>etc</p>
                <button>ver ahora</button>
            </div>
        </div>

        <div class="right-pane">
            <img class="image-detail" src="<?php echo $data["Entertainment"]->image() ?>">
        </div>

    </div>
    <?php include_once("shared/footer.php") ?>
</body>

</html>