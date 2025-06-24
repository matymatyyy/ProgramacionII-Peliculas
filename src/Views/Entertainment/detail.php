<?php 

$date = $data['Entertainment']->release_date()->format('d/m/Y');

$type = 0;

if ($data['Entertainment']->type() == 1) {
    $type = 'PELICULA:';
} else {
    $type = 'SERIE:';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entertainment</title>
    
    <link href="https://fonts.cdnfonts.com/css/red-hat-mono" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/nabla" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/bhlingglers" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/acknowledgement" rel="stylesheet">

    <link rel="stylesheet" href="/src/Views/Entertainment/Shared/FooterStyles/footer.css">
    <link rel="stylesheet" href="/src/Views/Entertainment/Shared/NavBarStyles/navBar.css">
    <link rel="stylesheet" href="/src/Views/Entertainment/EntertainmentStyles/list.css">
    <link rel="stylesheet" href="/src/Views/Entertainment/EntertainmentStyles/detail.css">
</head>

<body>
    <?php include_once("shared/navBar.php") ?>
   
    <div class="container">

    
        
        <div class="right-pane column1">
            <p class="type"> <?php echo $type ?></p>
            <img class="image-detail" src="<?php echo $data["Entertainment"]->image() ?>" >
            <h3 class="below-image category">Categoria</h3>                
        </div>
  

        <div class="title-column">
            <div>
                <h2 class="title"><?php echo $data["Entertainment"]->name() ?></h2>
                <h3 class="description"><?php echo $data["Entertainment"]->description() ?></h3>
            </div>

            <div class="below-description">
                <p class="clasificacion"> 
                    <?php echo $data["Entertainment"]->qualification() ?>
                    <span class="user-number">123.456</span>
                    <img class="user-icon" src='/src/Views/Entertainment/image/user.png' alt="imagen no disponible">
                </p>
            </div> 
            
       
                <p class="date"> <?php echo $date ?> </p>
       
                
                <p class="state"><?php echo $data['Entertainment']->ending() ?></p>
                <div class="btn-div" id="buttonImage">
                    <!--<p class="below-image">ver ahora -->
                    <img class="btn-img" src='/src/Views/Entertainment/image/disney.png' alt="imagen no disponible">
                    <!-- </p> -->
                </div>
               
        </div>
        
    </div>    
   

    <?php include_once("shared/footer.php") ?>
    <script type="text/javascript" src="/src/Views/Entertainment/EntertainmentScript/imageButton.js"></script>
</body>

</html>