<?php 

require_once("config.php");

session_regenerate_id();  //gera um novo id de sessão

echo session_id();

var_dump($_SESSION);

 ?>