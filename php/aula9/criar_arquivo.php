<?php
$arquivo = 'arquivo_criado.txt';
$conteudo = "Conteúdo do Arquivo!\r\n";

$arqAberto = fopen($arquivo, 'a');
fwrite($arqAberto, $conteudo);

fclose($arqAberto);
?>