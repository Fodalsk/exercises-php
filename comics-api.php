<?php

function pretty_print($output){
	echo "<pre>";
	print_r($output);
	echo "</pre>";
};

$data = json_decode(file_get_contents("https://xkcd.com/info.0.json"));

$random = mt_rand(0,$data->num);

$xkcd = json_decode(file_get_contents("https://xkcd.com/$random/info.0.json"));

$format = '<div><img src="%1$s" title="%2$s" alt="%3$s"/></div>';

printf($format,
	$xkcd->img,
	$xkcd->title,
	$xkcd->alt
);

?>