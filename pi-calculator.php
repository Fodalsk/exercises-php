 <form method="get">
  Numero 1: <input type="text" name="num"><br>
  <input type="submit">
 </form>

<?php
	
	$raio = $_GET['num'];

	echo "Raio: $raio<br>";

	echo "Perimetro: ". 2*M_PI*$raio . "<br>";

	echo "Area: " . M_PI*$raio*$raio . "<br>";

?>