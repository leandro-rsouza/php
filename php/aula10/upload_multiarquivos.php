<?php
$arquivo = $_FILES['arquivo']['name'];

$formatos = array('png','jpg','jpeg');
$quantidade = count($arquivo);

$cont=0;
while($cont < $quantidade){
	$extensao = pathinfo($arquivo[$cont], PATHINFO_EXTENSION);

	if(in_array($extensao, $formatos)){
		$pasta = "arquivos/";
		$temp = $_FILES['arquivo']['tmp_name'][$cont];
		$novonome = uniqid().".$extensao";
		
		if(move_uploaded_file($temp, $pasta.$novonome)){
			$msg = "Envio realizado com sucesso";
		} else {
			$msg = "Erro ao enviar arquivo";
		}
	} else {
		$msg = "Existe(m) arquivo(s) com formato não permitido!";
	}
$cont++;
}
echo $msg;
?>