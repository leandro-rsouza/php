<?php
require_once "Visitante.php";
require_once "Professor.php";
require_once "Aluno.php";
require_once "Bolsista.php";
require_once "Tecnico.php";

printf("<pre>");

$v = new Visitante();
$v->setNome("Josué Fernandes");
$v->setIdade(17);
$v->setSexo("M");
print_r($v);

printf("<hr>");
$p = new Professor();
$p->setNome("Carol Ribeiro");
$p->setIdade(21);
$p->setSexo("F");
$p->setEspecialidade("Ciências Contábeis");
$p->setSalario(4590);
print_r($p);

$p->receberAumento(10);
printf("Salário Atual: ".$p->getSalario());

printf("<hr>");
$a = new Aluno();
$a->setNome("Carlos Leandro");
$a->setIdade(24);
$a->setSexo("M");
$a->setMatricula(201602958);
$a->setCurso("Informática");
print_r($a);

$a->pagarMensalidade();

printf("<hr>");
$b = new Bolsista();
$b->setNome("Leon Santos");
$b->setIdade(19);
$b->setSexo("M");
$b->setMatricula(201701452);
$b->setCurso("Administração");
$b->setBolsa(50.89);
print_r($b);

$b->renovarBolsa();
$b->pagarMensalidade();

printf("<hr>");
$t = new Tecnico();
$t->setNome("Caio Silva");
$t->setIdade(19);
$t->setSexo("M");
$t->setMatricula(201701784);
$t->setCurso("Administração");
$t->setRegistroProf(17452);
print_r($t);

$t->praticar();

printf("</pre>");

?>