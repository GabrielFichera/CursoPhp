<?php 

function ola($texto, $periodo = "bom dia"){  //quando há um valor default no parametro caso não atribua um novo valor ao chamar a função, ele pega o valor declarado. Colocar o default sempre a direita

	return "ola $texto! $periodo<br>";
}
echo ola("teste");
echo ola("troxa","boa tarde");
echo ola("mundo", "");

function teste(){

$argumentos = func_get_args(); //recupera todos os argumentos q forem passados como função
//assim da pra manipular dados conforme forem passado argumentos

if(is_int($argumentos[0]))
	echo "é um inteiro <br>";

return $argumentos;

}

var_dump(teste(10));


 ?>