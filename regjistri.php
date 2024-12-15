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

    public function regjistrimi(){
        if(empty($this->emri) || empty($this->mbiemri) || empty($this->emaili) || empty($this->paswordi) || empty($this->confirmPaswordi)){
            return "Te gjitha fushat jane te detyrueshme!";
        }
    
        if(!filter_var($this->emaili, FILTER_VALIDATE_EMAIL)){
            return "Emaili juaj eshte INVALID";
        }
    
        if($this->paswordi !== $this->confirmPaswordi){
            return "Paswordat nuk perputhen!";
        }
    
        if(strlen($this->paswordi) < 6){
            return "Password duhet te kete min.6 Karaktere!";
        }
    
    
        $sqlCheck = "SELECT * FROM perdoruesit WHERE emaili = :emaili";
        $stmt = $this->dbconn->prepare($sqlCheck);
        $stmt->bindParam(':emaili', $this->emaili);
        $stmt->execute();
    
        if($stmt->rowCount() > 0){
            echo"<script>
                    alert('Emaili tashme Ekziston, Shkruaj nje tjeter!');
                    document.location='signup.php';
                    </script>";
        }
    
     
        $hashiratjaePassit = password_hash($this->paswordi, PASSWORD_DEFAULT);
        $sql = "INSERT INTO perdoruesit (emri, mbiemri, emaili, paswordi) VALUES (:emri, :mbiemri, :emaili, :paswordi)";
        $stmt = $this->dbconn->prepare($sql);
    
        $stmt->bindParam(':emri', $this->emri);
        $stmt->bindParam(':mbiemri', $this->mbiemri);
        $stmt->bindParam(':emaili', $this->emaili);
        $stmt->bindParam(':paswordi', $hashiratjaePassit);
    
        if($stmt->execute()){
            header("Location: Home.html");
            exit();
        } else {
            return "Ka ndodhur një gabim gjatë regjistrimit!";
        }
    }
    


}

?>