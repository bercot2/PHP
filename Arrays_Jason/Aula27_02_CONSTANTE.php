<?php 

//Criando uma constante dentro de um array
//valor true no final e para informar que essa constante e case_sensitive
define("BANCO_DE_DADOS", [
	'127.0.0.1',
	'root',
	'password',
	'test'
], true);

print_r(BANCO_DE_DADOS);

?>