<html>
    <body>
        <?php foreach ($data["comments"] as $comment) { ?>
            <a href="/comments/<?php echo $comment->id() ?>"><?php echo $comment->message() ?></a> <br>
        <?php } ?>
    </body>
</html>