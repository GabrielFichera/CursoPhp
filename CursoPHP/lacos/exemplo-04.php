<form>

	<input type="text" name="nome">
	<input type="date" name="nascimento">
	<input type="submit" value="ok">

</form>

<?php

if(isset($_GET)){ //verifica se existe, isto é, não é nulo

//Key no html = nome dos input

	foreach ($_GET as $key => $value) {

		echo "nome do campo $key <br>" ;
		echo "valor do campo $value";
		// <hr> escrever uma linha horizontal
		echo "<hr>";
	}
}

?>