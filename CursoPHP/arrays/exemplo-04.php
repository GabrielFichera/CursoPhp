<?php

//constante simples
define("SERVIDOR","127.0.0.1"); //Cria uma constante (nome,valor)

echo SERVIDOR . "<br>"; //printa sem o $ pois é constante


//constante array

define("BANCO_DE_DADOS",[
	'127.0.0.1',
	'root',
	'password',
	'test'
]);

print_r(BANCO_DE_DADOS);


//constantes padroes do php

echo "<br>".PHP_VERSION; //versao php
echo "<br>".DIRECTORY_SEPARATOR; //mostra qual a barra de separacao de arquivos
?>