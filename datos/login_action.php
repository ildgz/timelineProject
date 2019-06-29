<?php

   include_once("../lib/db.php");
   include_once("../lib/user.php");

   if (isset ($_POST['userName'], $_POST['password'])  && $_POST['userName']!="" and $_POST['password']!="") {

      $userName = $_POST['userName'];
      //$pwd = md5($_POST['password']);
      $pwd = $_POST['password'];
      
      $baseDatos = new Dbh;
      $baseDatos->connect();

      $nomClave = new User;
      $nomClave->getUsrReg($userName,$pwd); // match userName and pwd?
	print($nomClave->$pwd);
    }

    $baseDatos = null;
    $nomClave = null;

    header('Location: ../private_files/dashboard.php');

?>
