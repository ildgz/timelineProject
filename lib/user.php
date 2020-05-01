<?php
   
class User extends Dbh {

    // seting registered user	
    public function setUsrReg($userName, $email, $pwd) {

	  $sql = 'INSERT INTO Users (userName, email, pwd) VALUES (:userName, :email, :pwd)';
	  $statement = $this->connect()->prepare($sql);

	  $result = $statement->execute(['userName' => $userName, 'email' => $email, 'pwd' => $pwd]);

	  if ($result == false) {
		include "../templates/header.php";
		//include "../templates/mainmenu.php";
		echo '<p>Error: cannot execute query</p>';
		echo '<p><a href="../register.php">Try again</a></p>';
		include "../templates/footer.php";
		exit; // cuidado con esta salida
	  }
	  else {
		header('Location: ../private_files/validate.php');
	  }

      // cierra la BD
      $statement = $this->connect()->pdo = null;

      return;
  
    }
   

    // geting registered user
    public function getUsrReg($userName,$pwd) {
	 
	  // Users es la tabla de los usuarios registrados Common by default (sin privilegios administrativos)
	  //$sql = "SELECT * FROM Users WHERE (userName=? AND pwd=?)";
	  $sql = "SELECT * FROM Users WHERE (userName=?)";
	  $stmt = $this->connect()->prepare($sql);
	  $stmt->execute([$userName]);
	 
	  
	  // trae todo el registro
	  $userReg = $stmt->fetch(PDO::FETCH_OBJ);
	  //print $stmt->rowCount();
	  	  

	if (($stmt->rowCount()>0) && password_verify($pwd,$userReg->pwd)) {
				
	    // login y userName se reciben en dashboard.php para dar bienvenida al usuario registrado 
	    session_start();

	    // userReg como un arreglo; la alternativa: SESSION como un arreglo bidimensional (JSON)
	    $_SESSION['login'] = "OK";
	    $_SESSION['userName'] = $userReg->userName; // to say welcome user on dashboard
	    $_SESSION['idUser'] = $userReg->idUser;
	    $_SESSION['rol'] = $userReg->rol; // admin or custom

	    $_SESSION['ID'] = $_COOKIE['PHPSESSID'];

	    header('Location: ../private_files/dashboard.php'); // private menu
	    
	    } // password_verify
		
	    else {

		// rowCount() is false	      
		echo '<a href="../public_files/login.php">Error: user or pwd or both are wrong!!!</a>';
	        
	 	}

		 return;
    }

}

?>
