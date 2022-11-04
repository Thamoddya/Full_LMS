
<?php


$firstname = $_POST["fn"];
$lastname = $_POST["ln"];
$city = $_POST["city"];
$mobile = $_POST["mo"];
$subject = $_POST["subject"];
$grade = $_POST["gd"];
$stid = $_POST["stdid"];



$c = new mysqli("localhost", "root", "200509104610Thamoddya@", "st");


$c->query("INSERT INTO `stdetails` (`firstname`,`lastname`,`stid`,`grade` ,`mobile` ,`subject`,`city_id`)VALUES
 ('$firstname' , '$lastname','$stid' , '$grade' , '$mobile' , '$subject' ,'$city');");

header("location:../LOGIN/stdlogin.php");

?>