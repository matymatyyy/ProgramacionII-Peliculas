<!DOCTYPE html>
<body>
    <form method="POST" action="/entertainments/<?php echo $data["entertainment"]->id() ?>">
        <input placeholder="Nombre" type="text" name="name" value="<?php echo $data["entertainment"]->name() ?>">
        <input placeholder="Tipo" type="text" name="type" value="<?php echo $data["entertainment"]->type() ?>">
        <input placeholder="Fecha de salida" type="date" name="release_date" value="<?php echo $data["entertainment"]->release_date()->format("Y-m-d") ?>">
        <input placeholder="Final" type="text" name="ending" value="<?php echo $data["entertainment"]->ending() ?>">
        <input placeholder="Descripcion" type="text" name="description" value="<?php echo $data["entertainment"]->description() ?>">
        <input placeholder="Imagen" type="text" name="image" value="<?php echo $data["entertainment"]->image() ?>">
        <input placeholder="Clasificaicon" type="number" name="qualification" value="<?php echo $data["entertainment"]->qualification() ?>">
        <input type="submit">
    </form>
</body>
</html>