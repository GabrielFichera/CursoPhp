<?php 

//toda função precisa retornar um valor, caso nao retorne é denominado subrotina

function teste(){

	return "vai";
}

echo teste();
echo "<br>";
$frase = teste();

echo strlen($frase);

function salario(){

	return 946.00;
}
echo "<br>";
echo "josé recebeu 3 salários: " .(salario()*3);

 ?>