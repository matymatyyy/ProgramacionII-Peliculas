<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	ESTE ES EL DETALLE DE MI PEOPLE<br>
	ID: <?php echo $data["people"]->id() ?><br>
	NAME: <?php echo $data["people"]->name() ?><br>
	AGE: <?php echo $data["people"]->age() ?><br>
    Gender: <?php echo $data["people"]->gender() ?><br>
</body>
</html>