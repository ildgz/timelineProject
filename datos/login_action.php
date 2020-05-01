<?php

   include_once("../lib/db.php");
   include_once("../lib/user.php");

   $usuario = $_POST['userName'];
   // en favor de password_hash en signup_action.php:
   //$pwd = md5($_POST['password']);
   $pwd = $_POST['password'];
  

   if ( (!empty($usuario) && !empty($pwd) )) {

      // new object database connection
      $baseDatos = new Dbh;
      $baseDatos->connect();

      // new object user
      $nomClave = new User;
      $nomClave->getUsrReg($usuario,$pwd); // match user and pwd ? 
	
	
    } else { 
    // faltan datos
      header('Location: ../public_files/login.php');
	}

    $baseDatos = null;
    $nomClave = null;
?>
