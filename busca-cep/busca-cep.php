<form method="post">
	<input type="text" placeholder="CEP" name="cep"></br>
	<input type="submit" name="submit" value="enviar">
</form>

<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/functions.js"></script>
<script src="js/jquery.mask.js"></script>

<?php

if(isset($_POST['cep'])){
	$cep = str_replace("-","",$_POST['cep']);

	function get_address($cep){
		$url = "https://viacep.com.br/ws/".$cep."/json";

		$json = json_decode(file_get_contents($url));
		return $json;
	}

	$address = get_address($cep);

	foreach ($address as $chave => $valor) {
	  if ($chave == 'logradouro'){
	  	echo $valor." - ";
	  }
	  if($chave == 'bairro'){
	  	echo $valor." - ";
	  }
	  if($chave == 'localidade'){
	  	echo $valor." - ";
	  }	  if($chave == 'uf'){
	  	echo $valor;
	  }
	}
}

?>