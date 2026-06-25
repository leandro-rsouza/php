<?php
$arquivo = 'arquivo_criado.txt';
$tamanho = filesize($arquivo);
$arqAberto = fopen($arquivo, 'r');

while(!feof($arqAberto)){
	$linha = fgets($arqAberto, $tamanho);
	echo $linha."<br>";
}
fclose($arqAberto);
?>