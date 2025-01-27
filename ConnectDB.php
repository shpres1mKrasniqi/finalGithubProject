<?php
class ConnectDB {
    private static $instance = null;
    private $connection;

    private $host = 'localhost';
    private $dbname='srf_autocenter';
    private $username = 'root';
    private $password = '';

    private function __construct() {
        try {
            $this->connection = new PDO(
                "mysql:host={$this->host};dbname={$this->dbname}",
                $this->username,
                $this->password
            );
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log($e->getMessage(), 3, 'errors.log');
            die("Ka ndodhur nje problem me bazen e te dhenave.");
        }
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->connection;
    }

    public function __clone() {}
    public function __wakeup() {}
}


?>


