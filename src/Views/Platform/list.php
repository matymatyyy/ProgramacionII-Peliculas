<html>
    <body>
        <?php foreach ($data["platform"] as $platform) { ?>
            <a href="/platforms/<?php echo $platform->id() ?>"><?php echo $platform->name() ?></a> <br>
        <?php } ?>
    </body>
</html>