<?php 

require_once("config.php");

//limpa variavel de sessao
session_unset($_SESSION['nome']);

//mostra em tela o valor que a variavel global recebeu ao ter iniciado a sessao no arquivo Aula28_01_SESSION.php
echo $_SESSION['nome'];

//limpa variavel de sessao porem reinicia a sessao do usuario
session_destroy()

 ?>