<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entertainment</title>
    <link rel="stylesheet" href="/src/Views/Entertainment/EntertainmentStyles/list.css">
    <link rel="stylesheet" href="/src/Views/Entertainment/EntertainmentStyles/detail.css">
</head>
<body>
    <?php include_once("shared/navBar.php") ?>
   
    <div class="container">

    

        <div class="right-pane column1">
            <img class="image-detail" src="<?php echo $data["Entertainment"]->image() ?>" >

                <h3 class="below-image">clasificacion: <?php echo $data["Entertainment"]->qualification() ?></h3>
                <p class="below-image">Estado: <?php echo $data['Entertainment']->ending() ?></p>
                <p class="below-image">ver ahora</p>
                <div class="btn-div" id="buttonImage">
                    <img class="btn-img" src='/src/Views/Entertainment/image/disney.png' alt="imagen no disponible">
                </div>  
        </div>
  

        <div class="title-column">
            <div>
                <h2 class="title"><?php echo $data["Entertainment"]->name() ?></h2>
                <h3>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</h3>
            </div>
        </div>
        
    </div>    
   

    <?php include_once("shared/footer.php") ?>
    <script type="text/javascript" src="/src/Views/Entertainment/EntertainmentScript/imageButton.js"></script>
</body>

</html>