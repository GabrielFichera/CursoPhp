<?php

$nome = "gabriel fernando";

//Torna tudo para maiúsculo
$nomeUp = strtoupper($nome);

//Torna tudo minúsculo
$nomeLow = strtolower($nome);

//Torna apenas a primeira letra maiuscula
$nomeUpFirst = ucfirst($nome);

//Torna todas as primeiras letras maiusculas
$nomeUpAllFirst = ucwords($nome);

echo $nomeUp,"<br>",$nomeLow,"<br>",$nomeUpFirst,"<br>",$nomeUpAllFirst,"<br>";


////////////////////////////////////

echo "<br>";

$empresa = "visual";

//Função para trocar caracteres de lugares
//str_replace(search, replace, subject)
//search = palavra/letra que está procurando
//replace = palavra/letra por qual sera trocada
//subject = variável/alvo no qual vai ser trocada
$empresaTrocada = str_replace("i", "1", $empresa);
$empresaTrocada = str_replace("a", "@", $empresa);

echo $empresaTrocada, "<br>";

////////////////////////////////////


$frase = "O iago é burro.";

//Função que retorna a posição de alguma palavra na frase
//strpos(haystack, needle)
//haystack = alvo
//needle = palavra/regra
$query = strpos($frase,"burro");

echo $query, "<br>";

//Função que retorna a frase a partir da posição de start/fim;
//substr(string, start)
//string = palavra/frase
//start = posicao que começara a frase
//finish = posicao que terminará a frase (não obrigatoria)
$fraseCortada = substr($frase, 0,$query);

echo $fraseCortada;

?>