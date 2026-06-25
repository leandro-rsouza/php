<?php
require_once "Caneta.php";

$c1 = new Caneta;
	$c1->setModelo("BIC");
	$c1->setCor("Azul");
	$c1->setPonta(0.7);
	$c1->setCarga(99);

	printf($c1->getModelo()."<br>");
	printf($c1->getCor()."<br>");
	printf($c1->getPonta()."<br>");
	printf($c1->getCarga()."<br>");

	$c1->tampar();
	$c1->rabiscar();
	$c1->destampar();
	$c1->rabiscar();
?>