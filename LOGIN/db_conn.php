<?php

$sname= "localhost";
$unmae= "root";
$password = "200509104610Thamoddya@";

$db_name = "st";

$conn = mysqli_connect("localhost","root","200509104610Thamoddya@", "st");

if (!$conn) {
	echo "Connection failed!";
}