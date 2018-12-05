<?php
//Operadores Aula 17

//Operadores de Atribuicao!

$nome = "Teste "; //atribui valor 

echo $nome."Alguma coisa <br/>"; //Operador de String

$nome .= "Treinamento<br/>"; // Operador de atribuicao + um novo valor

echo $nome;

?>

<?php 

$valortotal = 0; // Recebe 0

$valortotal += 100; // Recebe o valor da variavel anterior + 100 

$valortotal += 25; // Recebe o valor da variavel anterior + 25

$valortotal *= .9; // pega 90% do valor das somas da mesma variavel a cima 0+100+25 = 125 -- 90% = 112.5

echo "Valor Com desconto: ".$valortotal."<br/>";

 ?>


<?php

//operadores de calculos

$a = 10;
$b = 2;

echo $a + $b; // Operador de Soma

echo "<br/>"; 

echo $a - $b; //Operador de Diminuicao

echo "<br/>";

echo $a * $b; //Operador de Multiplicacao

echo "<br/>";

echo $a / $b; // Operador de Divisao

echo "<br/>";

echo $a % $b; //Operador do resto da divisao

echo "<br/>";

echo $a ** $b; //Operador de exponenciacao 

echo "<br/>";

var_dump($a == $b); //operador de igualdade

echo "<br/>";

var_dump($a <=> $b); //operador de verificar de maior (1), igual (0), ou menor(-1)

echo "<br/>";

//funcao mostrando o operador nullcolesce, esse operador, ignora quando e nulo e mostra somente a primeira variavel encontrada com valor
function op_null(){
	$a = null;
	$b = null;
	$c = 10;
	echo $a ?? $b ?? $c;
} 

echo op_null();

?>



<?php
//Operadores incrementais

$a = 10;

echo "<br/>";

echo $a ++; // Soma mais 1 no valor da variavel

echo "<br/>";

echo $a;

echo "<br/>";

echo -- $a; //diminui 1 no valor da variavel

?>
