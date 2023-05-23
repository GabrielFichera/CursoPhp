<?php

$meses = array("janeiro","fevereiro","março","abril","maio","junho","julho","agosto","setembro","outubro","novembro","dezembro");


//iteração
//foreach ($variable as $key => $value)
//variable = array = meses
//key = index
//value = variavel criada pelo foreach para cada item que encontrar
foreach ($meses as $index => $mes) {
	$index += 1;
	echo "o mes $index é $mes <br>";

}

?>