<html>
    <body>
        <form method="POST" action="/domains/<?php echo $data["domain"]->id() ?>">
            <input type="text" name="name" value="<?php echo $data["domain"]->name()  ?>">
            <input type="text" name="code" value="<?php echo $data["domain"]->code()  ?>">
            <input type="submit">
        </form>
    </body>
</html>