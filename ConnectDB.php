<?php
class ConnectDB {
    private $conn = null;
    private $host = 'localhost';
<<<<<<< HEAD
    private $dbname = 'Veturat';
=======
    private $dbname = 'srf_autocenter';
>>>>>>> 6b06a8e35523ce541c1df4610e9bccb1b2dfdd36
    private $username = 'root';
    private $password = '';

    public function connectDB() {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $pdoe) {
            error_log($pdoe->getMessage(), 3, 'errors.log');
            die("Ka ndodhur nje problem me bazen e te dhenave.");
        }
        return $this->conn;
    }
}
?>