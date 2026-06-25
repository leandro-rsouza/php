<?php
$n = ['nome' => 'carlos', 'idade' => 21, 'sexo' => 'masculino', 'peso' => 66.8];

if(in_array('carlos', $n)){
	echo "ESTÁ NO ARRAY";
} else {
	echo "NÃO ESTÁ NO ARRAY";
}
?>