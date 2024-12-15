<?php
class KonektimimeDB {

  private $conn =null;
  private $host = 'localhost';
  private $dbname = 'srf_autocenter';
  private $username = 'root';
  private $password = '';
  
  public function connectDB(){
  
  try {
  $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname",
  $this->username, $this->password);
  $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) . "<br/>";
  $this->conn->setAttribute(PDO::FETCH_BOUND, PDO::FETCH_BOTH);
   $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC) . "<br/>";
  
   echo "Lidhja me: {$this->dbname} - {$this->host}: eshte ralizuar me sukses!";
  } catch (PDOException $pdoe) {
  die("Nuk mund të lidhej me bazën e të dhënave {$this->dbname} :" . $pdoe->getMessage());
  }
  
  return $this->conn;
  }
  }

  $conn = new KonektimimeDB();
  $conn = $conn->connectDB();

    ?>

  


