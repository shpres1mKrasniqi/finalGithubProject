<?php 

require_once('KonektimimeDB.php'); 
session_start();

class LoginVerify extends KonektimimeDB {
    private $dbconn;
    private $email;
    private $password;

    public function __construct() {
        $this->dbconn = $this->connectDB();
    }

    private function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $this->test_input($email);
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $this->test_input($password);
    }

    public function login() {
        try {
           
            $sql = "SELECT * FROM perdoruesit WHERE emaili = :email and paswordi = :password";
            $stm = $this->dbconn->prepare($sql);
            $stm->bindParam(':email', $this->email);
            $stm->bindParam(':password', $this->password);
            $stm->execute();

            if ($stm->rowCount() > 0) {
               
                $user = $stm->fetch(PDO::FETCH_ASSOC);

               
                
                    
                    $_SESSION['id'] = $user['id'];
                    $_SESSION['emri'] = $user['emri'];
                    header('Location: index.php'); 
                    exit();
              
            } else {
                
                echo "<script>alert('emaili ose pasi nuk ekziston!'); window.location.href='login.php';</script>";
            }
        } catch (PDOException $e) {
            
            echo "Gabim: " . $e->getMessage();
        }
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];


    $login = new LoginVerify();
    $login->setEmail($email);
    $login->setPassword($password);

  
    $login->login();
}