<?php

$qualasuaidade = 65;

$idadecrianca = 12;
$idademaior = 18;
$idademelhor = 65;

if ($qualasuaidade < $idadecrianca) {

	echo "Crianca!";

} else if ($qualasuaidade < $idademaior) {
	echo "Adolescente";

} else if ($qualasuaidade < $idademelhor) {
	echo "Adulto";

} else {
	echo "Idoso";
}

	echo "<br>";

//no comando abaixo os valores equivalem a "?" = entao e ":" = se nao
	echo ($qualasuaidade < $idademaior)?"Menor de idade":"Maior de Idade";

?>