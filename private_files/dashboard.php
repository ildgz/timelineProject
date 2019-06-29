<?php

  session_start();

  //include("../private_files/validate.php"); CREO QUE ESTA MAL AQUI
  //include("../templates/header.php");
  //include("../templates/mainmenu.php");
  include("../templates/headerLogin.php");

  // menu dashboard o privado
    $miSesion = session_id();

    if(isset($_SESSION['ID']) && $_SESSION['ID'] == $miSesion) { ?>

	<div class="container">
	   <div class="starter-template">
		<br>
		<br>
		<br>
		<div class="jumbotron">
			<div class="container text-center">
				<h1><strong>Hi, </strong> <?php echo $_SESSION['userName'] . ' '.$_SESSION['idUser']; ?></h1>
				<p><a href="#">User configuration</a> | <span class="label label-info"><?php echo $_SESSION['rol'] == 'admin' ? 'Admin' : 'Custom'; ?></span></p>
			</div>
		</div>
	   </div>
        </div><!-- /.container -->

    <?php 
    } 
?>

