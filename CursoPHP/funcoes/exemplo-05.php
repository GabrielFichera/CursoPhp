<?php 

function test($callback){

	
	//processo lento

	$callback();

}

test(function(){ //funcao anomina
	echo "terminou <br>";
});


$fn = function($a){

	var_dump($a);
};

$fn("oi");

 ?>