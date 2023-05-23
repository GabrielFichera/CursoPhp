<form>

<input type="number" name="n1">
<input type="number" name="n2">
<input type="submit" name="ok">

</form>

<?php

if (isset($_GET)) {
	


$n1 = $_GET['n1'];
$n2 = $_GET['n2'];

if(is_numeric($n1) && is_numeric($n2)){

echo $n1+$n2;

}else{

	echo "Digite um valor correto";
}
}

?>