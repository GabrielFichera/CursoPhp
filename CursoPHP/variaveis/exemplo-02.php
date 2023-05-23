<?php

$nome = "joao";
$numero = 2;

echo $nome;

echo "<br/>"; //pula a linha

echo $numero;

unset ($nome,$numero); //deleta a variavel

 if(isset($nome)){  //se a variável existe
 	echo $nome;
	echo $numero;
 }


?>