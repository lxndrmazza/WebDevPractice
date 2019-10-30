<?php
error_reporting(E_ALL);
ini_set('display_errors',0);
ini_set('log_errors',1);

function getQuote(){
	$quote = "blah";

	$file->fopen("www.google.com", "r");

	//if(!$file){
	//	printf("you goofed");
	//}


	while(!feof($file)) {
		$line = fgets($file);
		printf($line);
	}

	$matches = array();
	//while(!feof($file)) {
	//	$line = fgets($file);
	//	printf($line);
	

	print_r(error_get_last());
	$file->fclose();

}

getQuote();

?>