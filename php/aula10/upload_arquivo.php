<?php
$formatos = array('png','jpg','jpeg');

$extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

if(in_array($extensao, $formatos)){
	$pasta = "arquivos/";
	$temp = $_FILES['arquivo']['tmp_name'];
	$novo_nome = uniqid().".$extensao";

	if(move_uploaded_file($temp, $pasta.$novo_nome)){
		$msg = "Envio realizado com sucesso!";
	} else {
		$msg = "Falha ao enviar arquivo";
	}
} else {
	$msg = "Formato Inválido!";
}
echo $msg;

?>