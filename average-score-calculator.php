<form method="get">
	<label>Primeiro Bimestre</label><input type="number" name="primeiro"><br>
	<label>Segundo Bimenstre</label><input type="number" name="segundo"><br>
	<label>Terceiro Bimestre</label><input type="number" name="terceiro"><br>
	<label>Quarto Bimestre</label><input type="number" name="quarto"><br>
	<input type="submit" name="acao">
</form>

<?php

	$primeiro = $_GET['primeiro'];
	$segundo = $_GET['segundo'];
	$terceiro = $_GET['terceiro'];
	$quarto = $_GET['quarto'];

	function getTotal($num1,$num2,$num3,$num4){
		return $num1 + $num2 + $num3 + $num4;
	}

	function getAverage($num1){
		return $num1 / 4;
	}

	echo "Nota total é: ".getAverage(getTotal($primeiro,$segundo,$terceiro,$quarto));

?>