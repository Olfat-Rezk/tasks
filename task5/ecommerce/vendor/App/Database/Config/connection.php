<?php
namespace App\Database\Config;

class Connection{
   private $serverName ="localhost";
   private $userName = "root";
   private $password = '';
   public $conn;
    public function __construct(){
       $this->conn = new mysqli($this->serverName ,$this->userName ,$this->password);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
          }
          echo "Connected successfully";
    }
public function __destruct()
{
    $this->conn->close();
}

 }