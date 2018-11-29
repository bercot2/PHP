<?php

$nome = "bruno paschoal";

$nome = strtoupper($nome); 

//strtoupper transforma texto em letras maisuculas!

echo strtoupper($nome);

//strtolower transforma texto em letras minusculas!

$nome = strtolower($nome);

echo "<br>";

echo $nome;

echo "<br>";

//ucwords transforma somente a primeira letra de cada palavra em maiuscula
echo ucwords($nome);

echo "<br>";

//ucfirst transforma somente a primeira letra da primeira palavra em maisucula
echo ucfirst($nome);


?>