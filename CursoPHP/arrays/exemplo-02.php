<?php

$pessoas = array();

//array_push(array, var) //adiciona um item no array
//array = qual o array a ser tratado
//var =  o que vai ser adicionado no array
array_push($pessoas, array(  //adiciona um array no array (bidimensional)
	'nome' => 'joao',
	'idade' => 20

	));

array_push($pessoas, array(  //adiciona um array no array (bidimensional)
	'nome' => 'gabriel',
	'idade' => 22

	));

print_r($pessoas);


?>