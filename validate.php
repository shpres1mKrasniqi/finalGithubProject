<?php
include_once('KonektimimeDB.php'); 
session_start();

class AdminLogin {
    private $conn;

   
    public function __construct($conn) {
        $this->conn = $conn;
    }

    
    private function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

   
    public function login($emailiAdmin, $pasiAdmin) {
        $emailiAdmin = $this->test_input($emailiAdmin);
        $pasiAdmin = $this->test_input($pasiAdmin);

        try {
           
            $stmt = $this->conn->prepare("SELECT * FROM admins WHERE email = :email AND password = :password");
            $stmt->bindParam(':email', $emailiAdmin); 
            $stmt->bindParam(':password', $pasiAdmin); 

            $stmt->execute(); 
            if ($stmt->rowCount() > 0) {
                
                $admin = $stmt->fetch(PDO::FETCH_ASSOC);


                $_SESSION['admin_id'] = $admin['admin_id'];
              
                header("Location: adminLogin.php");
                exit();
                

            } else {
               
                echo "<script language='javascript'>";
                echo "alert('Informacion i Gabuar!');";
                echo "window.location.href='loginiAdmin.php';";
                echo "</script>";
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $emailiAdmin = $_POST["emailiAdmin"];
    $pasiAdmin = $_POST["pasiAdmin"];

   
    $adminLogin = new AdminLogin($conn);
    $adminLogin->login($emailiAdmin, $pasiAdmin);
}
?>
