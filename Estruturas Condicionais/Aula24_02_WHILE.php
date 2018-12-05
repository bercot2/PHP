<?php 

$total = 150;
$desconto = 0.9;

//faca condicao definida no DO
do {

	$total *= $desconto;


} //Enquanto (While) condicao seja verdadeira
while ($total > 100); 

echo $total;

 ?>