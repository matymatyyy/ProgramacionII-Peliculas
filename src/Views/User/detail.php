<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	ESTE ES EL DETALLE DE MI USER<br>
	ID: <?php echo $data["user"]->id() ?><br>
	NAME: <?php echo $data["user"]->username() ?><br>
	email: <?php echo $data["user"]->email() ?><br>
    CONTRASEÑA: <?php echo $data["user"]->password() ?><br>
</body>
</html>