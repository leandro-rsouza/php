<?php
require_once "ContaBanco.php";

$c1 = new ContaBanco;

$c1->setNumConta("55.452-69");
$c1->setTipo("Poupança");
$c1->setDono("Josiel da Silva Pereira");

printf("<b>Número da Conta: </b>".$c1->getNumConta()."<br>");
printf("<b>Tipo de Conta: </b>".$c1->getTipo()."<br>");
printf("<b>Nome: </b>".$c1->getDono()."<br>");

$c1->abrirConta();

printf("<b>Saldo: </b>".$c1->getSaldo()."<br>");

?>