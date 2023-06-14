<form method="get">
	<input type="text" name="word" placeholder="your misterious word">
	<input type="submit" name="submit">
</form>

<?php

error_reporting(0);
ini_set(“display_errors”, 0 );

function pretty_print($value){
	echo "<pre>";
	print_r($value);
	echo "</pre>";
}

if(isset($_GET['submit'])){
	$word = $_GET['word'];
}else{
	$word = "";
}

define('KEY', "b47a41a2-5d3b-4d00-be32-a7242b931c31");

$url = "https://www.dictionaryapi.com/api/v3/references/collegiate/json/$word?key=".KEY;

$lookup = json_decode(file_get_contents($url));

?>

<dl>
	<dt><?php echo $lookup[0]->meta->id; ?>(<?php echo $lookup[0]->fl; ?>)</dt>
	<dd><?php echo $lookup[0]->shortdef[0]; ?></dd>
</dl>