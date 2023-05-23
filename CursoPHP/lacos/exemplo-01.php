<?php

//for(index,range,incremento)

for ($i=0; $i < 10;$i++ ){

	if($i>2 && $i<8)
		continue; //continua o laço no proximo index

	if ($i == 8)
		break; //para o laço caso a condição seja feita

	echo $i . "<br>";
}


?>