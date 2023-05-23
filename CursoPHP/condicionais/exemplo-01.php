<?php

$idade = 30;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeIdoso = 65;


if ($idade < $idadeCrianca) {

	echo "Crianca";

} else if ($idade < $idadeMaior){
	
	echo "Adolescente";

} else if ($idade < $idadeIdoso){

	echo "Adulto";

} else {
	echo "Idoso";
}

////////////////////////////////////////////

//Operador ternário (condicional)

echo "<br>";

//mais utilizado pra condicao simples
//"?" se for verdade
//":" se não
echo ($idade < $idadeMaior)? "Menor de idade": "Maior de idade"; 
?>