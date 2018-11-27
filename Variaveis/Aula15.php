<?php

//array super global!!
//(int) e um cast transformando a variavel $nome do tipo string para inteiro
$nome = (int)$_GET["a"];

//var_dump($nome);

$ip = $_SERVER["REMOTE_ADDR"];
$ip1 = $_SERVER["SCRIPT_NAME"];

	echo $ip . " - " . "Variavel 1";
	echo "<br/>";
	echo $ip1 . " - " . "Variavel 2";


?>