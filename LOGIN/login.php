<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM stddetails WHERE sid='$uname' AND password='$pass'" ;

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['firstname'] === $uname && $row['password'] === $pass) {
            	$_SESSION['firstname'] == $row['firstname'];
            	$_SESSION['lastname'] == $row['lastname'];
            	$_SESSION['id'] == $row['id'];
            	header("Location:");
		        exit();
            }else{
				header("Location: stdlogin.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: stdlogin.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}