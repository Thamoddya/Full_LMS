
<?php


$firstname = $_POST["fn"];
$lastname = $_POST["ln"];
$city = $_POST["city"];
$mobile = $_POST["mo"];
$subject = $_POST["subject"];
$grade = $_POST["gd"];
$stid = $_POST["stdid"];
$pw = $_POST["pw"];



$c = new mysqli("localhost", "root", "200509104610Thamoddya@", "st");


$c->query("INSERT INTO `stdetails` (`firstname`,`lastname`, `password`,`stid`,`grade` ,`mobile` ,`subject`,`city_id`)VALUES
 ('$firstname' , '$lastname','$pw','$stid' , '$grade' , '$mobile' , '$subject' ,'$city');");

header("location:../LOGIN/stdlogin.php?error=Registed Sucessfully / Login to Your Account");

?>