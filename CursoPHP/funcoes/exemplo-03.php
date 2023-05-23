    <?php


$a = 10;

function trocaValor($a){ //passagem por valor, não altera o valor de memória da variavel $a

    $a += 50;

    return $a;

}

echo trocaValor($a) . "<br>";  //retorna 60

echo $a . "<br>";  //retorna 10

function trocaValorRef(&$a){ //passagem por referência, altera o valor de memória da variavel $a

    $a += 50;

    return $a;

}

echo trocaValorRef($a) . "<br>";  //retorna 60

echo $a;  //retorna 60
?>