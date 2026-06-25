<?php
require_once "Livro.php";
require_once "Pessoa.php";

$p[0] = new Pessoa("Carlos", 25, "M");
$p[1] = new Pessoa("Pedro", 31, "M");

$l[0] = new Livro("PHP Rápido", "Jehnnyfer Houston", 116, $p[0]);
$l[1] = new Livro("Javascript Para Iniciantes", "Leon Ribeiro Santos", 202, $p[0]);
$l[2] = new Livro("POO Fácil", "Denny Jordan", 320, $p[1]);

$l[0]->detalhes();
$l[0]->abrir();

$l[0]->avancarPag();
$l[0]->avancarPag();
$l[0]->voltarPag();

$l[0]->folhear(116);

$l[0]->avancarPag();

$l[0]->voltarPag();
$l[0]->voltarPag();
$l[0]->voltarPag();
$l[0]->voltarPag();
$l[0]->voltarPag();

$l[0]->folhear(0);

$l[0]->voltarPag();

$l[0]->folhear(15);

$l[0]->avancarPag();
$l[0]->avancarPag();

$l[0]->fechar();

$l[0]->avancarPag();

$l[1]->detalhes();

$l[2]->detalhes();

?>