<?php
require_once "ControleRemoto.php";

$c1 = new ControleRemoto;

$c1->ligar();
$c1->aumentarVol();
$c1->abrirMenu();
$c1->play();

?>