<?php 

//Exemplo de Array bidimensional

$carros[0][0] = "GM";
$carros[0][1] = "Cobalt";
$carros[0][2] = "Onix";
$carros[0][3] = "Camaro";

$carros[1][0] = "Ford";
$carros[1][1] = "Fiesta";
$carros[1][2] = "Fusion";
$carros[1][3] = "Eco Sport";

//retorna valor de acordo com a matriz posicao 0 valor 3
echo $carros[0][3];

echo "<br>";

//retorna o ultimo valor da posicao 1 
echo end($carros[1]);

 ?>