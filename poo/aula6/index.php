<?php
require_once "Lutador.php";
require_once "Luta.php";

$l = array();
$l[0] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 3, 1);
$l[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);

$UCE01 = new Luta();
$UCE01->marcarLuta($l[0], $l[1]);
$UCE01->lutar();

$l[0]->status();

?>