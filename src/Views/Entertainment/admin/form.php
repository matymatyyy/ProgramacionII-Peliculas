<!DOCTYPE html>
<body>
    <form method="POST" action="/entertainments">
        <input placeholder="Nombre" type="text" name="name">
        <input placeholder="Tipo" type="text" name="type">
        <input placeholder="Fecha de salida" type="date" name="release_date">
        <input placeholder="Final" type="text" name="ending">
        <input placeholder="Descripcion" type="text" name="description">
        <input placeholder="imagen" type="text" name="image">
        <input placeholder="Clasificaicon" type="number" name="qualification">
        <input type="submit">
    </form>
<br>
    <form action="/entertainments/delete" method="post">
        <input type="text" name="id" placeholder="1">
        <input type="submit">
    </form>
</body>
</html>