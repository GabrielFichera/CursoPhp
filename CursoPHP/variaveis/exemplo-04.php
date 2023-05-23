<?php


//Tipos Básicos

//Strings
$nome = "Teste1";
$nome2 = 'Teste aspas simples';


//Números
$numeroSimples = 2;
$numeroFlutuante = 2.5;

//Booleano
$variávelBooleano = false;

//---------------------------------------------------

//Tipos Compostos

//Array
$array = array("teste", 23);

//Exemplo printando um valor do array
echo $array[1];

//Objeto

$objetoData = new DateTime(); //classe nativa DateTime()

echo "<br/>";

var_dump($objetoData);

//---------------------------------------

//Tipos Especiais

//Resource

$resourceArquivo = fopen("exemplo-04.php", "r");

echo "<br/>";

var_dump($resourceArquivo);

//Nulo

$nulo = NULL; //Ausência de valor
$vazio = "";  //Existe espaço na memória mas não tem valor
?>