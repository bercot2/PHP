<?php 

$json = '[{"nome":"Joao","idade":20},{"nome":"Glaucio","idade":25}]';

//Decodifica o formato JSON passado na variavel $json
//Json_decode transforma um json ja formatado de volta para um array
$data = json_decode($json, true);


var_dump($data);


 ?>