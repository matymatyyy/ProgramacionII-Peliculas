<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	ESTE ES EL DETALLE DE MI Comentario<br>
	ID: <?php echo $data["comment"]->id() ?><br>
	NAME: <?php echo $data["comment"]->qualification() ?><br>
	fecha: <?php echo $data["comment"]->date_of_comment()->format('Y-m-d H:i:s'); ?><br>
    mensaje: <?php echo $data["comment"]->message() ?><br>
</body>
</html>