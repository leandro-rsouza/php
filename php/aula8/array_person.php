<?php
$c1 = array(1 => 'A', 2 => 'B', 3 => 'C');

$c1[4] = 'D';

foreach($c1 as $valor) {
	echo "$valor ";
}

echo "<br>";
unset($c1[1]);

foreach($c1 as $valor) {
	echo "$valor ";
}

?>