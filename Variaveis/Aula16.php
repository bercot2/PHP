<?php
//Aula de Escopo de Variavel!

$nome = "Bruno";

function teste() {
	
	global $nome;
	echo $nome;
	echo "<br/>";
}

function teste2(){

	$nome = "Pedro";
	echo $nome.": Teste 2!" ;
}

//funcao retorna o valor da variavel descrita no inicio do programa pois dentro da funcao a variavel foi definida como GLOBAL!
teste();
//sem variavel global ira ler somente a variavel definida dentro da funcao que eu passei!
teste2();



?>