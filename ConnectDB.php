<?php
class ConnectDB {
    private $conn = null;
    private $host = 'localhost';
    private $dbname='dbname';
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