<?php

   /* Create, Read, Update, Delete Timelines and-or Events */
   class CRUD extends Dbh {


      // crea en la BD el tl (titulo y año)
      public function createTl() {
    
	$message = '';

	// idUser in userPub table
	$idUser = $_SESSION['idUser'];

	if( isset($_POST['nameTimeline'],$_POST['yearTimeline']) && ($_POST['nameTimeline']!='' && $_POST['yearTimeline']!='')) {
        
	   $nameTL = $_POST['nameTimeline'];
           $year = $_POST['yearTimeline'];

           // Inserting timeline values. Keep fk_idUser via idUser is not automatic !!!
    	   $sql = 'INSERT INTO TL (nameTL, year, idUser) VALUES (:nameTL, :year, :idUser)';

    	   $statement = $this->connect()->prepare($sql);

    	   if ($statement->execute(['nameTL' => $nameTL, 'year' => $year, 'idUser' => $idUser])) {

       	     print($message = 'data inserted succesfully!');
    	   }
    	   else {
             var_dump($this->connect()->errorInfo());
    	   }
        }
	
	return;
      }

 
      // busca en la BD el usuario-tl
      public function readTl() {

        $idUser = $_SESSION['idUser'];
	 
	// TL es la tabla del encabezado de la linea de tiempo: nombre y año
	$sql = "SELECT * FROM TL WHERE idUser = ?";

	$stmt = $this->connect()->prepare($sql);		
	$stmt->execute([$idUser]);
	$tl = $stmt->fetchAll(PDO::FETCH_OBJ);

	return($tl);
      }


      // update timeline (title and year)
      public function updateTl() {

	$idTL = $_GET['idTL'];
	$nameTL = $_GET['nameTL'];

	$sql = 'SELECT * FROM TL WHERE idTL = :idTL';
	$statement = $this->connect()->prepare($sql);
	$statement->execute(['idTL' => $idTL ]);

	$tl = $statement->fetch(PDO::FETCH_OBJ);

	if (isset ($_POST['nameTL'])  && isset($_POST['year']) ) {
	  $nameTL = $_POST['nameTL'];
	  $year = $_POST['year'];
	  $sql = 'UPDATE TL SET nameTL = :nameTL, year = :year WHERE idTL = :idTL';
	  $statement = $this->connect()->prepare($sql);
	
	  if ($statement->execute(['nameTL' => $nameTL, 'year' => $year, 'idTL' => $idTL])) {

              header("Location: ../private_files/read_tl.php?idTL=$idTL&nameTL=$nameTL");
          }

	}
          return $tl;

      }


      // delete timeline (title and year)
      public function deleteTl() {

      $message = '';

      $idTL = $_GET['idTL'];
      $sql = 'DELETE FROM TL WHERE idTL = :idTL';
      $statement = $this->connect()->prepare($sql);
      
      if ($statement->execute(['idTL' => $idTL])) {

	 // NO LOGRA VERSE este mensaje requiere div
     	 print($message = "It's done: TL deleted !!");
  
         header("Location: ../private_files/delete_tl.php");
      }
      else {
             var_dump($this->connect()->errorInfo());
      }
  
      return;

      }


      // create Event on DB idTL-nameTL
      public function createEv() {

        $idTL = $_GET['idTL'];

        $message = ' ';

        /* de menos, se requiere que la linea de tiempo tenga nombre y año; y el evento nombre, fecha */
    	if (isset ($_POST['nameEvent'])  && isset($_POST['fechaEvent']) ) {

      	   $name = $_POST['nameEvent'];
           $fecha = $_POST['fechaEvent'];
           $descrip = $_POST['descripEvent'];
           $links = $_POST['linksEvent'];

           // Inserting Event values
           $sql = 'INSERT INTO Event (idTL,name,fecha,descrip,links) VALUES (:idTL,:name,:fecha,:descrip,:links)';

           $statement = $this->connect()->prepare($sql);

           if ($statement->execute(['idTL' => $idTL,'name' => $name, 'fecha' => $fecha, 'descrip' => $descrip, 'links' => $links])) {

              $message = 'data inserted succesfully';
           }

           else {
             var_dump($this->connect()->errorInfo());
           }

        }

      return $message;
      
      }


      // read Event on DB idTL-nameTL
      public function readEv() {

      if (isset($_GET['idTL'],$_GET['nameTL']) && ($_GET['idTL']!='' && $_GET['nameTL']!='')) {

      	  // idTL identifica el timeline a que pertenece el evento idEv
  	  $idTL = $_GET['idTL'];
	  $nameTL = $_GET['nameTL'];
	  $sql = 'SELECT * FROM Event WHERE idTL=:idTL';
	  $statement = $this->connect()->prepare($sql);
	  $statement->execute(['idTL' => $idTL]);
	  $event = $statement->fetchAll(PDO::FETCH_OBJ);
      }

      else {
	header("Location: ../private_files/read_tl.php");
      }

      return($event);
      
      }


      // update Event on DB idEv
      public function updateEv() {

	$idTL = $_GET['idTL'];
	$nameTL = $_GET['nameTL'];

	$idEv = $_GET['idEv'];
	$sql = 'SELECT * FROM Event WHERE idEv = :idEv';
	$statement = $this->connect()->prepare($sql);
	$statement->execute(['idEv' => $idEv ]);
        
	$this->connect()->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
	$this->connect()->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

	$evento = $statement->fetch(PDO::FETCH_OBJ);

	if (isset ($_POST['name'])  && isset($_POST['fecha']) ) {

	  $name = $_POST['name'];
	  $fecha = $_POST['fecha'];
	  $descrip = $_POST['descrip'];
	  $links = $_POST['links'];
	  $sql = 'UPDATE Event SET name=:name, fecha=:fecha, descrip=:descrip, links=:links WHERE idEv=:idEv';
	  $statement = $this->connect()->prepare($sql);

	  if ($statement->execute(['name' => $name, 'fecha' => $fecha, 'descrip' => $descrip, 'links' => $links, 'idEv' => $idEv])) {

	    header("Location: ../private_files/read_event.php?idEv=$idEv&idTL=$idTL&nameTL=$nameTL");
	  }

        }

      return($evento);

      }


      // delete Event on DB idEv
      public function deleteEv() {

	$idEv = $_GET['idEv'];
	$sql = 'DELETE FROM Event WHERE idEv = :idEv';
	$statement = $this->connect()->prepare($sql);

	if ($statement->execute(['idEv' => $idEv])) {

	  header("Location: ../private_files/read_event.php");
	}

	return;
      }


      // count rows (Events)
      public function countEv() {

        $idTL = $_GET['idTL'];

	// datos del Evento (detalle)
	$sql = 'SELECT *, found_rows() FROM Event WHERE idTL = :idTL';
	$statement = $this->connect()->prepare($sql);
	$statement->execute(['idTL' => $idTL]);
	$event = $statement->fetchAll(PDO::FETCH_OBJ);

      return $event;

      }


  } // CRUD

