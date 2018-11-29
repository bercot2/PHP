<?php

$empresa = "Hcode";

//str_replace ele manipula os dados de uma string podendo alterar qualquer coisa na string definida pelos parametros

$empresa = str_replace("o", "0", $empresa);
$empresa = str_replace("e", "3", $empresa);

echo $empresa;

?>