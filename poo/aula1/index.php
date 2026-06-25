<?php
require_once "Caneta.php";

$c1 = new Caneta;

$c1->modelo = "BIC";
$c1->cor = "Preta";
$c1->ponta = 0.7;

	$c1->tampar();
	$c1->rabiscar();
	$c1->destampar();
	$c1->rabiscar();
?>