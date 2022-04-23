<?php
	$server="localhost";
	$username="root";
	$pass="";
	$dbname="modul9_pbw";

	$conn = mysqli_connect($server, $username, $pass, $dbname);
	if(!$conn){
		die("Connection Failed: " .mysqli_connect_error());
	}
	echo "Connected Succesfully";
?>