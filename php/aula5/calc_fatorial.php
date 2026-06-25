<?php
	$v1 = 5;

	$c1 = $v1;
	$f1 = 1;

	while ($c1>=1) {
		$f1 = $f1 * $c1;
		$c1--;
	}
	echo "Fatorial de $v1! = $f1 <br>";

	$v2 = 3;
	$f2 = 1;

	for ($c2=$v2; $c2>=1; $c2--) { 
		$f2 = $f2 * $c2;
	}
	echo "Fatorial de $v2! = $f2";
?>