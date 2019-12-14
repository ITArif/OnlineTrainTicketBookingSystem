<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="train_ticket";
$connection=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(mysqli_connect_errno()){
	die("Error fix please!");
	} // else{	echo "Connection Success<br>";}
?>