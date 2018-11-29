<?php

$frase = "A repeticao e mae da retencao.";

$palavra = "mae";

//strpos pega a posicao que a palavra se encontra no meio dos caracteres
$q = strpos($frase, $palavra);

//substr igual do sql pega uma parte de uma string de acordo com sua posicao, no caso o xemplo embaixo pega da posicao 0 ate $q = 14
$text = substr($frase, "0", $q);

var_dump($text);

//strlen pega o numero de caracteres de uma string
//o exemplo abaixo esta pegando a $frase ate $q = 14, substituindo a palavra mae (strlen($palavra)), pelo restante da frase.
$text2 = substr ($frase, $q + strlen($palavra), strlen($frase));

echo "<br>";

var_dump($text2);

?>