<?php 
require_once('KonektimimeDB.php');  

class ContactUsPHP extends KonektimimeDB {

    private $id;
    private $emridheMbiemri;
    private $email;
    private $mesazhi;
    private $dbconn;

    public function __construct($id = '', $emridheMbiemri = '', $email = '', $mesazhi = '') {
        $this->id = $id;
        $this->emridheMbiemri = $emridheMbiemri;
        $this->email = $email;
        $this->mesazhi = $mesazhi;
        $this->dbconn = $this->connectDB();  
    }

    public function getID() {
        return $this->id;
    }

    public function setID($id) {
        $this->id = $id;
    }

    public function getEmriDheMbiemri() {
        return $this->emridheMbiemri;
    }

    public function setEmriDheMbiemri($emridheMbiemri) {
        $this->emridheMbiemri = $emridheMbiemri;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getMesazhi() {
        return $this->mesazhi;
    }

    public function setMesazhi($mesazhi) {
        $this->mesazhi = $mesazhi;
    }

   
    public function shtoMesazh() {
        try {
            $sql = "INSERT INTO kontakt (emridheMbiemri, email, mesazhi)
                    VALUES (:emridheMbiemri, :email, :mesazhi)";
            
            $stm = $this->dbconn->prepare($sql);
            
           
            $stm->bindParam(':emridheMbiemri', $this->emridheMbiemri);
            $stm->bindParam(':email', $this->email);
            $stm->bindParam(':mesazhi', $this->mesazhi);

          
            $stm->execute();

            
            echo "<script>
                    alert('Te dhenat jane Regjistruar me sukses');
                    document.location='index.php';
                  </script>";
        } catch (PDOException $e) {
            
            echo "Gabim ne SQL: " . $e->getMessage();
        }
    }
    
    
    public function lexoMesazhe() {
        try {
            $sql = "SELECT * FROM kontakt"; 
            $stm = $this->dbconn->prepare($sql);
            $stm->execute();
            
            
            $rezultati = $stm->fetchAll(PDO::FETCH_ASSOC);
            return $rezultati; 
        } catch (PDOException $e) {
            echo "Gabim ne leximin e mesazhit: " . $e->getMessage();
        }
    }
    
}
?>