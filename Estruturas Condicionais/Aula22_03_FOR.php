<?php 

echo"<select>";

//Criando um Combo Box com os valores passados dentro do FOR 
for ($i=date("Y"); $i >= date("Y")-100; $i--){

	//echo $i."<br>";
	echo '<option value ="'.$i.'">'.$i.'</option>"';
}



 ?>