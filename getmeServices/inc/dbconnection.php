<?php

 class database{


  //  private $host = "127.0.0.1";
  //    private $db_name = "caretec1_agency";
  //    private $username = "caretec1_agent";
  //    private $password = "Javax.swing_2023";
  //    public $conn;
   private $host = "localhost";
   private $db_name = "getMe";
   private $username = "root";
   private $password = "";
   public $conn; 
 

    // get the database connection
  
    public function getConnection() {
      $this->conn = null;
  
      try {
          $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
          if (!$this->conn) {
              throw new Exception("Connection error: ". mysqli_connect_error());
          }
      } catch (Exception $e) {
          echo $e->getMessage();
      }
  
      return $this->conn;
  }
	
	
}

//$connect = new database();
//$connect->getConnection();
