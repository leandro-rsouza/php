<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Formulário </title>
</head>
<body>
	<form method="post" action="form_contagem.php">
		<?php
			$c = 1;
			while ($c<=5) {
				echo "<input type='number' name='$c' max='5' min='1' value='0'> <br>";
				$c++;
			}
		?>
	</form>
</body>
</html>
	