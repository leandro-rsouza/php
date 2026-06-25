<?php
$txt = "          Este é um exemplo!          ";
$rem = trim($txt); //rtrim($txt): Remove somente os espaços iniciais
echo $rem;		   //ltrim($txt): Remove somente os espaços finais	
$tam = strlen($rem);
	echo "<br> $tam";
?>