<?php

   // find user session
   session_start();

   // la sesion que quiero vaciar
   unset($_SESSION['userName']);

   // to finish user session
   session_destroy();

   $message = 'BYE BYE. Go back soon !!!';

   echo "<script type='text/javascript'>
		alert('$message');
                document.location.href='../index.php';
	      </script>";

?>
