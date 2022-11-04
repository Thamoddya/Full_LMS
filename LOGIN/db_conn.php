<?php

$sname= "localhost";
$unmae= "root";
$password = "200509104610Thamoddya@";

$db_name = "studentregister";

$conn = mysqli_connect("localhost","root","200509104610Thamoddya@", "studentregister");

if (!$conn) {
	echo "Connection failed!";
}