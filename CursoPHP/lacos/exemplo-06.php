<?php

$total = 100;
$desconto = 0.9;

do{
	
	$total *= $desconto;
	echo "$total <br>";

}while($total > 60)

?>