<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Formulário de Envio de Arquivo </title>
</head>
<body>
	<form method="post" action="upload_multiarquivos.php" enctype="multipart/form-data">
		<input type="file" name="arquivo[]" multiple>
		<input type="submit" name="enviar" value="Enviar">
	</form>
</body>
</html>