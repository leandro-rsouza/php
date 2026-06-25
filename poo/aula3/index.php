<?php
require_once "Caneta.php";
	$c1 = new Caneta("Compactor", "Preta", 0.5, 85);

	printf($c1->getModelo()."<br>");
	printf($c1->getCor()."<br>");
	printf($c1->getPonta()."<br>");
	printf($c1->getCarga()."<br>");

	$c1->tampar();
	$c1->rabiscar();
	$c1->destampar();
	$c1->rabiscar();
?>