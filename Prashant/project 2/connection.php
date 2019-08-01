<?php

$db = mysqli_connect("localhost","root","","ismlib");

if(!$db){
	die("connection failed: ".mysqli_connect_error());
}

echo "connection successful";
?>