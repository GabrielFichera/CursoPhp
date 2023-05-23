<?php


//$_GET[""] //pega todas as variaveis através da URL entre colchetes (vem sempre em string)

$nome = $_GET["a"];  //coleta a query string "a" da url.

//obs: query string é a separação das variaveis dividida por "?"
//exemplo http://localhost/variaveis/exemplo-05.php?a=123

$nome2 = (int)$_GET["b"];  //convertendo a string para inteiro (cast)

var_dump($nome);

echo "<br/>";

var_dump($nome2);
//----------------------------------------------------

//$_SERVER[""]  //Coleta as informações do ambiente (usuário e servidor)


$ip = $_SERVER["REMOTE_ADDR"]; //Coleta o IP do usuário

echo "<br/>";

echo $ip;

$ip2 = $_SERVER["SCRIPT_NAME"]; //Coleta qual o arquivo de acesso do usuário

echo "<br/>";

echo $ip2;

?>