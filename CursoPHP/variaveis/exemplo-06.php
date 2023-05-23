<?php   //escopo global -inicio

$nome = "Sergio";

function teste(){  //escopo de variavel -inicio


	global $nome;   //Variável responsável para utilizar a variável nome, que foi definida em outro escopo

	echo $nome;
} //escopo de variavel -fim

teste();


//escopo global -fim
?> 