<?php

$diaSemana = date("w");

switch ($diaSemana){

	case 0: 

	echo "Domingo";
	break;
	case 1:

	echo "Segunda";
	case 2:

	echo "Terça";
	break;
	case 3:

	echo "quarta";
	break;
	case 4:

	echo "Quinta";
	break;
	case 5:

	echo "Sexta";
	break;
	case 6:
	
	echo "Sabado";
	break;

	default: 
	echo "Teste"; //se não cair em nenhum case cai no default
	break;
}

?>