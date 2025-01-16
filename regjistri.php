<?php

require_once('KonektimimeDB.php');

class SignupForma extends KonektimimeDB {

    private $id;
    private $emri;
    private $mbiemri;
    private $emaili;
    private $paswordi;
    private $confirmPaswordi;
    private $dbconn;

    public function __construct($id = '', $emri = '', $mbiemri = '', $emaili = '', $paswordi = '', $confirmPaswordi = '') {
        $this->id = $id;
        $this->emri = $emri;
        $this->mbiemri = $mbiemri;
        $this->emaili = $emaili;
        $this->paswordi = $paswordi;
        $this->confirmPaswordi = $confirmPaswordi;
        $this->dbconn = $this->connectDB();
    }


    public function getID(){
        
        return $this->id;
     }
    public function setID($id) {
         $this->id = $id; 
        }

    public function getEmri() { 
        return $this->emri; 
    }
    public function setEmri($emri) {
         $this->emri = $emri; 
        }

    public function getMbiemri() {
         return $this->mbiemri;
        }
    public function setMbiemri($mbiemri)
     { $this->mbiemri = $mbiemri;
     }

    public function getEmaili() {
         return $this->emaili; 
        }
    public function setEmaili($emaili) {
         $this->emaili = $emaili; 
        }

    public function getPaswordi() { 
        return $this->paswordi; 
    }
    public function setPaswordi($paswordi) {
         $this->paswordi = $paswordi;
         }

    public function getConfirmPaswordi() {
         return $this->confirmPaswordi; 
        }
    public function setConfirmPaswordi($confirmPaswordi) {
         $this->confirmPaswordi = $confirmPaswordi; 
        }


    public function regjistrimi() {
        if (empty($this->emri) || empty($this->mbiemri) || empty($this->emaili) || empty($this->paswordi) || empty($this->confirmPaswordi)) {
            return "Ploteso te gjitha!";
        }

        if (!filter_var($this->emaili, FILTER_VALIDATE_EMAIL)) {
            return "Emaili gabim!";
        }

        if ($this->paswordi !== $this->confirmPaswordi) {
            return "Passwordat nuk përputhen!";
        }

        if (strlen($this->paswordi) < 6) {
            return "Passwordi duhet te ket se paku 6 karaktere!";
        }

        $sqlCheck = "SELECT * FROM perdoruesit WHERE emaili = :emaili";
        $stmt = $this->dbconn->prepare($sqlCheck);
        $stmt->bindParam(':emaili', $this->emaili);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            echo "<script>
            alert('Email-i ekziston! Ju lutem shkruaj nje email tjeter!');
            document.location='signup.php';
            </script>";
            return "Email-i ekziston! Ju lutem shkruani nje email tjeter.";
        }

        $sqlInsert = "INSERT INTO perdoruesit (emri, mbiemri, emaili, paswordi) VALUES (:emri, :mbiemri, :emaili, :paswordi)";
        $stmt = $this->dbconn->prepare($sqlInsert);
        $stmt->bindParam(':emri', $this->emri);
        $stmt->bindParam(':mbiemri', $this->mbiemri);
        $stmt->bindParam(':emaili', $this->emaili);
        $stmt->bindParam(':paswordi', $this->paswordi); 
        if ($stmt->execute()) {
            setcookie("emri", $this->emri, time() + (86400 * 30), "/");
            header("Location: index.php");
            exit();
        } else {
            return "Gabim. Ju lutem provoni prap.";
        }
    }

    
    public function lexoTeDhenat() {
        $sql = "SELECT * FROM perdoruesit";
        $stm = $this->dbconn->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

   
    public function lexoSipasID($id) {
        $sql = "SELECT * FROM perdoruesit WHERE id = :id";
        $stm = $this->dbconn->prepare($sql);
        $stm->execute([':id' => $id]);
        return $stm->fetch(PDO::FETCH_ASSOC);
    }

    
    public function updateUserat($id) {
        $sql = "UPDATE perdoruesit SET emri = ?, mbiemri = ?, emaili = ?, paswordi = ? WHERE id = ?";
        $stm = $this->dbconn->prepare($sql);
        $stm->execute([$this->emri, $this->mbiemri, $this->emaili, $this->paswordi, $id]);
    }

    
    public function fshijUserat($id) {
        $sql = "DELETE FROM perdoruesit WHERE id = :id";
        $stm = $this->dbconn->prepare($sql);
        $stm->bindParam(':id', $id);
        $stm->execute();

        if ($stm == true) {
            echo "<script>
            alert('Te dhenat jan fshi me sukses!');
            document.location='leximiUserave.php';
            </script>";
        } else {
            echo "<script>
            alert('Gabim gjat fshirjes!');
            document.location='leximiUserave.php';
            </script>";
        }
    }

    
    public function userateRi() {
        $sql = "SELECT COUNT(*) AS new_users FROM perdoruesit WHERE DATE(created_at) = CURDATE()";
        $stmt = $this->dbconn->prepare($sql);
        $stmt->execute();
        $rezultati = $stmt->fetch(PDO::FETCH_ASSOC);
        return $rezultati['new_users'] ?? 0;
    }


    public function adminatNumri() {
        $sql = "SELECT COUNT(*) AS admin_userat FROM admins";
        $stmt = $this->dbconn->prepare($sql);
        $stmt->execute();
        $rezultati = $stmt->fetch(PDO::FETCH_ASSOC);
        return $rezultati['admin_userat'] ?? 0;
    }


    public function numeroProduktet() {
        $sql = "SELECT COUNT(*) AS produktet FROM produktet";
        $stm = $this->dbconn->prepare($sql);
        $stm->execute();
        $rez = $stm->fetch(PDO::FETCH_ASSOC);
        return $rez['produktet'] ?? 0;
    }

 
    public function login($email, $password) {
        $sql = "SELECT * FROM perdoruesit WHERE emaili = :emaili AND paswordi = :paswordi";
        $stm = $this->dbconn->prepare($sql);
        $stm->bindParam(':emaili', $email);
        $stm->bindParam(':paswordi', $password);
        $stm->execute();

        if ($stm->rowCount() > 0) {
            $user = $stm->fetch(PDO::FETCH_ASSOC);
            $_SESSION['id'] = $user['id'];
            $_SESSION['emri'] = $user['emri'];
            header('Location: index.php');
            exit();
        } else {
            echo "<script>alert('Emaili ose paswordi jan gabim!'); window.location.href='login.php';</script>";
        }
    }
}

?>
