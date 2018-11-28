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

$valortotal *= .9; // pega 90% do valor das somas da mesma variavel a cima 0+100+25 = 125 - 90% = 112.5

echo "Valor Com desconto: ".$valortotal."<br/>";

 ?>


<?php

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

?>
