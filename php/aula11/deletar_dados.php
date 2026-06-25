<?php
include_once('servidor.php');

$id = $_GET['id'];
$query = "DELETE FROM pessoa WHERE id='$id'";
$deletar = mysqli_query($conn,$query);
?>