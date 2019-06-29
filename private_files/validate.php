<?php
	if(!(isset($_SESSION['login']) && $_SESSION['login'] == "OK")) {

	   // after signup.php
	   $message = "Now, if you want, may login";
	   echo "<script type='text/javascript'>
		alert('$message');
		location.href='../public_files/login.php';
	        </script>";
		
	   exit(); // goto dashboard.php

	}
?>
