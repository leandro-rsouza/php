<?php
include_once("servidor.php");

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];

	$query = "INSERT INTO pessoa (nome,rg,cpf) VALUES ('$nome','$rg','$cpf')";
	$inserir = mysqli_query($conn, $query);

?>