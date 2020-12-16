<?php
  class Connection{
    private $conn;

    function __construct(){
      try {
        
        $this->conn = new PDO("mysql:host=127.0.0.1;dbname=mediawhere;port=3306", "root", "");
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch (\Exception $e) {
        echo "Se ha producido un error: " . $e->getMessage();
      }
    }

    function getConnection(){
      return $this->conn;
    }
  }
?>