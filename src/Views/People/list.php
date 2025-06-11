<html>
    <body>
        <?php foreach ($data["peoples"] as $people) { ?>
            <a href="/peoples/<?php echo $people->id() ?>"><?php echo $people->name() ?></a> <br>
        <?php } ?>
    </body>
</html>