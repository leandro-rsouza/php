<?php
$n = ['nome' => 'carlos', 'idade' => 21, 'sexo' => 'masculino', 'peso' => 66.8];

if(is_array($n)){
	echo "É UM ARRAY";
} else {
	echo "NÃO É UM ARRAY";
}

if(in_array('carlos', $n)){
	echo "ESTÁ NO ARRAY";
} else {
	echo "NÃO ESTÁ NO ARRAY";
}
?>