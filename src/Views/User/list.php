<html>
    <body>
        <?php foreach ($data["users"] as $users) { ?>
            <a href="/users/<?php echo $users->id() ?>"><?php echo $users->username() ?></a> <br>
        <?php } ?>
    </body>
</html>