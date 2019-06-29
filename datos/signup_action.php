<?php
   
   include_once("../lib/db.php");
   include_once("../lib/user.php");


   if (isset($_POST['Clean'])) {
	session_unset();
	session_destroy();
   }

   if (isset ($_POST['userName'], $_POST['email'], $_POST['pwd'], $_POST['pwdConfirm'])  && $_POST['userName']!="" and $_POST['email']!="" and $_POST['pwd']!="" and $_POST['pwdConfirm']!="") {

	$userName = $_POST['userName'];
	$email = $_POST['email'];
	/*$pwd = md5($_POST['pwd']);
	$pwdConfirm = md5($_POST['pwdConfirm']);*/

	$pwd = $_POST['pwd'];
	$pwdConfirm = $_POST['pwdConfirm'];

	// valida contraseñas proporcionadas
	if ($pwd != $pwdConfirm) {
		include "../templates/header.php";
		//include "../templates/mainmenu.php";
		echo '<p>Error: password does not match. Try again</a>';
		echo '<p><a href="../public_files/register.php">Try again</p>';
		include "../templates/footer.php";
		exit(); // cuidado con esta salida
	} else {
	
	 	// valida que el usuario nuevo no este registrado
	 	$nuevoUsuario = new User;

	 	$sql = "SELECT * FROM Users WHERE (userName=?)";
	 	$stmt = $nuevoUsuario->connect()->prepare($sql);
		
	 	$stmt->execute([$userName]);

	 	if ($stmt->rowCount() == 1) {

	   	   $message = "Sorry, username ".$userName." already taken";
	   	   echo "<script type='text/javascript'>
		   	alert('$message');
		   	location.href='../public_files/signup.php';
	           </script>";

	 	} else {

		$pwd = password_hash($pwd, PASSWORD_DEFAULT, ['cost' => 10]);
	   	$nuevoUsuario->setUsrReg($userName, $email, $pwd);

	 	}
	
	}
	
   }

?>
