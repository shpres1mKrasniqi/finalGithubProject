<?php
require_once('KonektimimeDB.php'); 
session_start();

class AdminLogin extends KonektimimeDB{
    private $dbconn;
    private $emailiAdmin;
     private $pasiAdmin;

    public function __construct() {
     $this->dbconn = $this->connectDB();
    }

    private function test_input($data) {
     $data = trim($data);
        $data = stripslashes($data);
     $data = htmlspecialchars($data);
    return $data;
    }

    
    public function getEmailiAdmin() {
        return $this->emailiAdmin;
    }

    public function setEmailiAdmin($emailiAdmin) {
        $this->emailiAdmin = $this->test_input($emailiAdmin);
    }

public function getPasiAdmin() {
        return $this->pasiAdmin;
    }


 public function setPasiAdmin($pasiAdmin) {
        $this->pasiAdmin = $this->test_input($pasiAdmin);
    }

    public function login() {
        try {
            $sql = "SELECT * FROM admins WHERE email = :email AND password = :password";
           $stmt = $this->dbconn->prepare($sql);
          $stmt->bindParam(':email', $this->emailiAdmin);
          $stmt->bindParam(':password', $this->pasiAdmin);

            $stmt->execute();

  if ($stmt->rowCount() > 0) {
                $admin = $stmt->fetch(PDO::FETCH_ASSOC);

         $_SESSION['admin_id'] = $admin['admin_id'];

                header("Location: adminLogin.php");
                exit();
      } else {
               
              echo"<script>alert('Emailin ose paswordin e keni gabuar');
              window.location.href='loginiAdmin.php'; </script>";
          
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$emailiAdmin = $_POST["emailiAdmin"];
    $pasiAdmin = $_POST["pasiAdmin"];

$adminLogin = new AdminLogin();

    
$adminLogin->setEmailiAdmin($emailiAdmin);
    $adminLogin->setPasiAdmin($pasiAdmin);

  
    $adminLogin->login();
}

?>
