<?php
require_once 'Video.php';
require_once 'Telespectador.php';
require_once 'Visualizacao.php';

$v[0] = new Video("Tabelas - Aula 9 HTML5 ");
$v[1] = new Video("Aula 13 PHP e Mysql");
$v[2] = new Video("Aula 15 Javascript");

$t[0] = new Telespectador("Carlos", 24, "M", "carl04");
$t[1] = new Telespectador("César", 22, "M", "cess");
$t[2] = new Telespectador("Leo", 22, "M", "ll01");

$vis[0] = new Visualizacao($t[0], $v[1]);
$vis[1] = new Visualizacao($t[1], $v[1]);
$vis[2] = new Visualizacao($t[2], $v[1]);

$vis[2]->avaliar();
$vis[1]->like();
$vis[2]->like();
$vis[2]->play();

printf("<pre>");
print_r($vis);
printf("</pre>");
?>