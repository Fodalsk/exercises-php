<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pay Rate Calculator</title>
</head>
<form method="get">
	<label>Seu valor hora </label><input type="text" name="payrate"><br>
	<label>Quantidade de horas diárias </label><input type="text" name="hours"><br>
	<input type="submit" value="Enviar" name="submit">
</form>

<?php

if(isset($_GET['submit'])){
    include 'model.php';
}

?>
