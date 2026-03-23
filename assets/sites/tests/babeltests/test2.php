<?php


$ip = $_SERVER["REMOTE_ADDR"];
$string = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "V", "Z", " ", ".", ",");
$vol = mt_rand();

function generate() {
	$page = "";
	for($x=0; $x < 40; $x++){
		$page .= makeline() . "<br><br>";
	}
	return $page;
}

function makeline() {
	global $string;
	$line = "";
	for($i=0; $i < 79; $i++){
		$line .= $string[mt_rand(0, 24)];
	}
	return $line;
}


$xxx = generate();
echo $xxx . " dito";


?>