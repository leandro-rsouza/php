<?php
$txt = "Este é um exemplo de string que...";

$resp = wordwrap($txt,10,"<br>\n", true);
	echo $resp;
?>