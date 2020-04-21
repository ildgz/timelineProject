<?php

   // find user session
   session_start();

   // to finish user session
   session_destroy();

   $message = 'BYE BYE. Go back soon !!!';

   echo "<script type='text/javascript'>
		alert('$message');
                location.href='../index.php';
	      </script>";

?>
