<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Formulário </title>
</head>
<body>
	<b> Calcular Idade: </b> <br>
	<form method="post" action="dados_idade.php">
	Nome: <input type="text" name="nome"> <br>
	Ano de Nascimento: <input type="number" name="ano"> <br>
	<fieldset> 
		<legend> Sexo: </legend>
		<input type="radio" name="sexo" id="masc" value="Homem"> <label> Masculino </label> <br>
		<input type="radio" name="sexo" id="fem" value="Mulher"> <label> Feminino </label> <br>
		<input type="submit" name="Enviar">
	</fieldset>
	</form>
</body>
</html>