<?php
class KonektimimeDB {

    private $server;
    private $username;
    private $password;
    private $dbname;

    
    public function lidhja() {
        
        $this->server = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "srf_autocenter";

        
        $conn = new mysqli($this->server, $this->username, $this->password, $this->dbname);

        
        if ($conn->connect_error) {
            die("Lidhja me databazën dështoi: " . $conn->connect_error);
        }

        
        echo "Lidhja me databazën u realizua me sukses!<br>";

        return $conn;
    }
}




$lidhja = new KonektimimeDB(); 
$conn = $lidhja->lidhja(); 
?>
