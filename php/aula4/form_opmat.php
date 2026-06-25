<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="post" action="dados_opmat.php">
		Digitar Valor: <input type="number" name="valor">
		<fieldset>
		<legend> Operação </legend>
			<input type="radio" name="op" id="dobro" value="1">
			 	<label for="dobro"> Dobro </label>
			<input type="radio" name="op" id="cubo" value="2">
			 	<label for="cubo"> Cubo </label>
			<input type="radio" name="op" id="raiz" value="3">
				<label for="raiz"> Raiz Quadrado </label>
		</fieldset>
			<input type="submit" name="enviar" value="Enviar">
	</form>
</body>
</html>