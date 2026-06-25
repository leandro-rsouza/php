<?php
	$n1 = -1;
	$n2 = 4;
	$n3 = 3.4;
	$n4 = 8000;

	echo "Valores: <br> $n1 <br> $n2 <br> $n3 <br> $n4 <br>";
	echo "Valor Absoluto de <b>$n1</b>: ".abs($n1)."<br>";
	echo "Valor da Potenciação de <b>$n2</b>: ".pow($n2,2)."<br>";
	echo "Raiz Quadrada de <b>$n2</b>: ".sqrt($n2)."<br>";
	echo "Valor Inteiro de <b>$n3</b>: ".intval($n3)."<br>";
	echo "Arredondamento <b>$n3</b> Para Maior: ".ceil($n3)."<br>";
	echo "Arredondamento <b>$n3</b> Para Menor: ".floor($n3)."<br>";
	echo "Arredondamento de <b>$n3</b>: ".round($n3)."<br>";
	echo "Formatando <b>$n4</b>: ".number_format($n4,2, ",",".");
?>