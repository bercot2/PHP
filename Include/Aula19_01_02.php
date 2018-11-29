<?php
//Include -chama um arquivo para dentro da linha de programacao sem validar se existe ou nao o arquivo chamado.

//include "Aula19_01.php";

//Require ele chama um arquivo para dentro da linha de programacao porem ele valida se o arquivo funciona e se o arquivo realmente existe, caso nao o programa inteiro para de funcionar.

//Require_once e a mesma funcao do require, a diferenca que ele impede de ser realizado o chamamento de um mesmo arquivo 2 vezes impedindo erros

require_once "Aula19_01.php";

require_once "Aula19_01.php";

$resultado = soma(10,20);

echo $resultado;


?>