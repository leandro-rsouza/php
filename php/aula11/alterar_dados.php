<?php
include_once('servidor.php');

$id = $_GET['id'];
$query = "SELECT * FROM pessoa WHERE id = '$id'";
$resultado = mysqli_query($conn,$query);
$consulta = mysqli_fetch_assoc($resultado);

echo "<form action='editar.php' method='POST'>";
	echo "<input type='hidden' name='id' value='".$consulta['id']."'>";
	echo "<input type='text' name='nome' value='".$consulta['nome']."'>";
	echo "<input type='number' name='cpf' value='".$consulta['cpf']."'>";
	echo "<input type='number' name='rg' value='".$consulta['rg']."'>";
	echo "<input type='submit' value='Editar'>";
echo "</form>";
?>