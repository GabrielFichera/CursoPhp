<?php


$frutas = array("laranja","abacaxi","melancia"); //possui 1 dimensao (vetor)

print_r($frutas);  //printa o array

echo "<br>";

//array bidimensional
$carros[0][0] = "GM";  
$carros[0][1] = "Cobalt";
$carros[0][2] = "Onyx";
$carros[0][3] = "Camaro";

$carros[1][0] = "Ford";
$carros[1][1] = "Fiesta";
$carros[1][2] = "Fusion";
$carros[1][3] = "EchoSport";

print_r($carros);

echo "<br>".end($carros[1]) //Verifica o ultimo da posicao (carro da ford)

?>