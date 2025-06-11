<html>
    <body>
        <?php foreach ($data["categorys"] as $categorys) { ?>
            <a href="/categorys/<?php echo $categorys->id() ?>"><?php echo $categorys->name() ?></a> <br>
        <?php } ?>
    </body>
</html>