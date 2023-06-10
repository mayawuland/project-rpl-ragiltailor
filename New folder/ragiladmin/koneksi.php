<?php
	$hostname	= "localhost";
	$username	= "id19759754_ragiltailor";
	$password	= "*RagilTailor60"; 
	$database	= "id19759754_ragiltailor"; 

	$connect = new mysqli($hostname,$username,$password,$database);
	if($connect->connect_error){
		die("Error : ".$connect->connect_error);
	}
?>