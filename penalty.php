<form method="get">
	<input type="text" name="fish" placeholder="KG Peixes">
	<input type="submit" name="submit" value="enviar">
</form>

<?php

if(isset($_GET['fish'])){
	$excess = $_GET['fish'] - 50;
	$penalty = $excess * 4;

	if($_GET['fish'] > 50){
		echo "Você excedeu $excess</br>";
		echo "E sua multa será de R$".sprintf('%.2f',$penalty);
	}else{
		echo 'Você não excedeu o limite!';
	}
}

?>