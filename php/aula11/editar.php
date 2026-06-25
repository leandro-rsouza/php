<?php
include_once('servidor.php');
$id = $_POST['id'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];

$query = "UPDATE pessoa SET nome='$nome', cpf='$cpf', rg='$rg' WHERE id='$id'";
$alterar = mysqli_query($conn,$query);
?>