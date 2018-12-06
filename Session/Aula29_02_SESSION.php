<?php 

require_once("config.php");

//toda vez que e atualizado algo no sistema ou na web, e gerado outro id 
session_regenerate_id();

echo session_id();

var_dump($_SESSION);


 ?>