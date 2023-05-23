<?php

//aspas dupla
$nome = "teste";

//aspas simples
$nome2 = 'gabriel';

//ambos são retornados como string
var_dump($nome,$nome2);

echo "<br>";

//a aspas dupla consegue verificar se há uma variável dentro digitado
echo "ABC $nome";

echo "<br>";

//a aspas simples não faz essa verificação, retornando tudo como texto
echo 'ABC $nome';

?>