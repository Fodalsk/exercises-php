<form method="get">
	<h1>Converting from centimetres to metres</h1>
	<label>Centimetros</label><input type="number" name="cm"><br>
	<input type="submit">
</form>

<?php

function converter($num){
	return $num  / 100;
}

if(isset($_GET['cm'])){
	$cm = $_GET['cm'];

	echo converter($cm)." metres";
}

?>