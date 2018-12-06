<?php 

//array bidimensional

$pessoas = array();

//array_push cria a posicao ([0],[1], etc) do array da variavel $pessoas
array_push($pessoas, array(
	'nome' => 'Joao',
	'idade' => 20
));

array_push($pessoas, array(
	'nome' => 'Glaucio',
	'idade' => 25
));

//retorna a posicao 0 (referente ao primeiro array_push) e o valor 'nome' do primeiro array_push
print_r($pessoas[0]['nome']);

 ?>