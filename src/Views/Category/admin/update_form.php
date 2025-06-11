<!DOCTYPE html>
<body>
    <form method="POST" action="/categorys/<?php echo $data["category"]->id() ?>">
        <input placeholder="Nombre" type="text" name="name" value="<?php echo $data["category"]->name() ?>">
        <input type="submit">
    </form>
</body>
</html>