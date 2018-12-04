<?php

for ($i = 0; $i <= 1000; $i += 5){

	// o IF ignora todo o laco entre do 200 e 800
	if ($i >= 200 && $i <= 800) continue;
	// operador "===" verifica o valor passado e quebra (break) quando encontra o valor definidio no IF.
	if ($i === 900) break; 
	echo $i . "<br>";
}


?>