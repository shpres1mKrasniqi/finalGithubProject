<?php

require_once('KonektimimeDB.php');

class SignupForma extends KonektimimeDB{

    private $id;
    private $emri;
    private $mbiemri;
    private $emaili;
    private $paswordi;
    private $confirmPaswordi;
    private $dbconn;


    public function __construct($id='', $emri='', $mbiemri='', $emaili='', $paswordi='', $confirmPaswordi='')
    {
        $this->id=$id;
        $this->emri=$emri;
        $this->mbiemri=$mbiemri;
        $this->emaili=$emaili;
        $this->paswordi=$paswordi;
        $this->confirmPaswordi=$confirmPaswordi;
        $this->dbconn=$this->connectDB();
        
    }

    public function getID(){
       return $this->id;
    }

    public function setID($id){
        $this->id=$id;
    }

    public function getEmri(){
        return $this->emri;
    }

    public function setEmri($emri){
        $this->emri=$emri;
    }

    public function getMbiemri(){
        return $this->mbiemri;
    }

    public function setMbiemri($mbiemri){
        $this->mbiemri=$mbiemri;
    }

    public function getEmaili(){
        return $this->emaili;
    }

    public function setEmaili($emaili){
        $this->emaili=$emaili;
    }


    public function getPaswordi(){
        return $this->paswordi;
    }

    public function setPaswordi($paswordi){
        $this->paswordi=$paswordi;
    }

    public function getConfirmPaswordi(){
        return $this->confirmPaswordi;
    }

    public function setConfirmPaswordi($confirmPaswordi){
        $this->confirmPaswordi=$confirmPaswordi;
    }

    public function regjistrimi() {
        if (empty($this->emri) || empty($this->mbiemri) || empty($this->emaili) || empty($this->paswordi) || empty($this->confirmPaswordi)) {
            return "Te gjitha fushat jan te detyrueshme!";
        }
    

        if (!filter_var($this->emaili, FILTER_VALIDATE_EMAIL)) {
            return "Email-i juaj eshte GABIM!";
        }
    
        
        if ($this->paswordi !== $this->confirmPaswordi) {
            return "Passwordat nuk perputhen!";
        }
    
       
        if (strlen($this->paswordi) < 6) {
            return "Passwordi duhet te kete se paku 6 karaktere!";
        }
    
        
        $sqlCheck = "SELECT * FROM perdoruesit WHERE emaili = :emaili";
        $stmt = $this->dbconn->prepare($sqlCheck);
        $stmt->bindParam(':emaili', $this->emaili);
        $stmt->execute();
    
        if ($stmt->rowCount() > 0) {
            echo"<script>
            alert('Email-i  ekziston! Ju lutem perdorni nje email tjeter!');
            document.location='signup.php';
            </script>";
            return "Email-i  ekziston! Ju lutem perdorni nje email tjeter.";
        }
    
       
        $hashedPassword = password_hash($this->paswordi, PASSWORD_DEFAULT); 
        $sqlInsert = "INSERT INTO perdoruesit (emri, mbiemri, emaili, paswordi) VALUES (:emri, :mbiemri, :emaili, :paswordi)";
        $stmt = $this->dbconn->prepare($sqlInsert);
        $stmt->bindParam(':emri', $this->emri);
        $stmt->bindParam(':mbiemri', $this->mbiemri);
        $stmt->bindParam(':emaili', $this->emaili);
        $stmt->bindParam(':paswordi', $hashedPassword);
    
        if ($stmt->execute()) {

            setcookie("emri", $this->emri, time() +(86400* 30), "/");

            header("Location: index.php");
           exit();
        } else {
            return "GABIM. Ju lutem provoni perseri.";
        }
    }
    
    
//metoda me lexu perdorusit nga DB: 

public function lexoTeDhenat(){
    $sql = "select * from perdoruesit";
    
    $stm= $this->dbconn->prepare($sql);

    $stm->execute();

    $rezultati = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $rezultati;
    
}

//metoda edit i userav
    public function lexoSipasID($id){
        $sql = "SELECT * FROM perdoruesit WHERE id=:id";

        $stm = $this->dbconn->prepare($sql);
        $stm->execute([':id' =>$id]);
        $rezultati = $stm->fetch(PDO::FETCH_ASSOC);
        return $rezultati;   
    }

    public function updateUserat($id){
        $sql = "UPDATE perdoruesit SET emri= ?, mbiemri= ?, emaili = ?, paswordi = ? where id = ?";
        $stm = $this->dbconn->prepare($sql);
        $stm->execute([$this->emri, $this->mbiemri, $this->emaili, $this->paswordi, $id]);
    }

//Metoda delete per userate e autosallonit

public function fshijUserat($id){
    $sql = "DELETE FROM perdoruesit where id=:id";

    $stm = $this->dbconn->prepare($sql);
    $stm->bindParam(':id', $id);
    $stm->execute();

    if($stm==true){

        echo"<script>
        alert('Te dhenat jane Fshire me Sukses!');
        document.location='leximiUserave.php';
        </script>";

    }
    else{
        echo"<script>
        alert('Te dhenat nuk jane Fshire. GABIM!');
        document.location='leximiUserave.php';
        </script>";
    }
}


    //Numerimi i userave te ri ne autosallon

    public function userateRi(){
        $sql = "SELECT COUNT(*) AS new_users FROM perdoruesit WHERE DATE(created_at) = CURDATE()";
        $stmt = $this->dbconn->prepare($sql);
        $stmt->execute();

         $rezultati = $stmt->fetch(PDO::FETCH_ASSOC);
       return $rezultati['new_users'] ?? 0;
    }


    //Numrimi i adminave

    public function adminatNumri(){
        $sql="SELECT COUNT(*) AS admin_userat FROM admins";

        $stmt = $this->dbconn->prepare($sql);
        $stmt->execute();

        $rezultati = $stmt->fetch(PDO::FETCH_ASSOC);
        return $rezultati['admin_userat'] ?? 0;
    }


    //Numerimi i produkteve ne Autosallon: 


    public function numeroProduktet(){
        $sql = "SELECT COUNT(*) as produktet FROM produktet";

        $stm = $this->dbconn->prepare($sql);

        $stm->execute();

        $rez = $stm->fetch(PDO::FETCH_ASSOC);
        return $rez['produktet']?? 0;
    }
    
}



?>