<?php

// DB connection using PDO
class Dbh {

  private $servername;
  private $username; 
  private $password; 
  private $dbname; 
  private $charset;
  private $options;

  
  public function connect() {

     $this->servername = "localhost";
     $this->username = "root";
     $this->password = "123root";
     $this->dbname = "timeline";
     $this->charset = "utf8mb4"; // mejor que utf8, no es necesario cambiar el cotejamiento en  la BD. Permite: áéíóú ñ directamente
     $this->options = [
                       PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                       PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                       PDO::ATTR_EMULATE_PREPARES => false,
                       PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL,

                       // supuestamente para rowCount() o fetchColumn()
                       PDO::MYSQL_ATTR_FOUND_ROWS => true,
                       PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true
                      ];

     try {

        $dsn = "mysql:host=".$this->servername.";dbname=".$this->dbname.";charset=".$this->charset;
        $pdo = new PDO($dsn,$this->username,$this->password, $this->options);

        /* to fix Error!: SQLSTATE[HY000] [2006] MySQL server has gone away
	https://stackoverflow.com/questions/34098828/php-pdo-exception-warning-on-mysql-has-gone-away?noredirect=1&lq=1 */
        $pdo->setAttribute(PDO::ATTR_TIMEOUT,ini_get('max_execution_time'));

        return $pdo;
      
      } catch(PDOException $e) {

         die("Connection failed: ".$e->getMessage(). "<br/>");
      } 

  }
}

?>
