<?php

   include_once("../lib/db.php");
   include_once("../lib/user.php");


   if ( isset($_POST['userName'], $_POST['password']) && (!empty($_POST['userName']) && !empty($_POST['password']) )) {

      $userName = $_POST['userName'];
      // en favor de password_hash en signup_action.php:
      //$pwd = md5($_POST['password']);
      $pwd = $_POST['password'];
      
      $baseDatos = new Dbh;
      $baseDatos->connect();

      $nomClave = new User;
      $nomClave->getUsrReg($userName,$pwd); // match userName and pwd? 
	

      header('Location: ../private_files/dashboard.php');
	
    } else { 
		header('Location: ../public_files/login.php');
	}

    $baseDatos = null;
    $nomClave = null;
?>
