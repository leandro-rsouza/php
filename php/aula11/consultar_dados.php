<?php
include_once("servidor.php");

$query = "SELECT * FROM pessoa";
$resultado = mysqli_query($conn, $query);

while($consulta = mysqli_fetch_assoc($resultado)){
	echo $consulta['nome']."<br>";
	echo $consulta['cpf']."<br>";
	echo $consulta['rg']."<br>";
	echo "<a href='deletar_dados.php?id=".$consulta['id']."'> Deletar </a> - ";
	echo "<a href='alterar_dados.php?id=".$consulta['id']."'> Alterar </a>";
	echo "<hr>";
}
?>