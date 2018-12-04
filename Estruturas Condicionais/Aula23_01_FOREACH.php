<?php 

$meses = array(
	"Janeiro", "Fevereiro","Marco",
	"Abril", "Maio","Junho",
	"Julho", "Agosto","Setembro",
	"Outubro", "Novembro","Dezembro"
);

//o Foreach ele incremeta cada valor passado da array definidio na variavel $meses e é atribuido na variavel $mes dentro do foreach
foreach ($meses as $index => $mes) {
	//pega posicao da string no array o echo com a variavel $index
	echo "Indice: ".$index."<br>";
	
	echo "O mes é: ".$mes."<br>";
	
}

 ?>