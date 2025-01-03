<?php

require_once('KonektimimeDB.php');  

class AddProducts extends KonektimimeDB {
    
    private $id;
    private $modeli;
    private $foto;
    private $pershkrimi;
    private $cmimi;
    private $shtuar_nga;
    private $shtuar_ne;
    private $dbconn;

    public function __construct($id='', $modeli='', $foto='', $pershkrimi='', $cmimi='', $shtuar_nga='', $shtuar_ne='') {
        $this->id = $id;
        $this->modeli = $modeli;
        $this->foto = $foto;
        $this->pershkrimi = $pershkrimi;
        $this->cmimi = $cmimi;
        $this->shtuar_nga = $shtuar_nga;
        $this->shtuar_ne = $shtuar_ne;
        $this->dbconn = $this->connectDB();  
    }


    public function getFoto() {
        return $this->foto;
    }

    public function setFoto($foto) {
        $this->foto = $foto;
    }


    public function getModeli() {
        return $this->modeli;
    }

    public function setModeli($modeli) {
        $this->modeli = $modeli;
    }

    
    public function getPershkrimi() {
        return $this->pershkrimi;
    }

    public function setPershkrimi($pershkrimi) {
        $this->pershkrimi = $pershkrimi;
    }

   
    public function getCmimi() {
        return $this->cmimi;
    }

    public function setCmimi($cmimi) {
        $this->cmimi = $cmimi;
    }

    
    public function getShtuarNga() {
        return $this->shtuar_nga;
    }

    public function setShtuarNga($shtuar_nga) {
        $this->shtuar_nga = $shtuar_nga;
    }

   
    public function getShtuarNe() {
        return $this->shtuar_ne;
    }

    public function setShtuarNe($shtuar_ne) {
        $this->shtuar_ne = $shtuar_ne;
    }

  
    public function addProduct() {
        try {
            
            session_start();
            if (isset($_SESSION['admin_id'])) {
                $this->shtuar_nga = $_SESSION['admin_id'];  
            } else {
                echo "Duhet të jeni të loguar si admin për të shtuar produkte.";
                return;
            }

            $stmt = $this->dbconn->prepare("INSERT INTO produktet (foto, modeli, pershkrimi, cmimi, shtuar_nga, shtuar_ne) 
                                            VALUES (:foto, :modeli, :pershkrimi, :cmimi, :shtuar_nga, :shtuar_ne)");
            
       
            $stmt->bindParam(':foto', $this->foto);
            $stmt->bindParam(':modeli', $this->modeli);
            $stmt->bindParam(':pershkrimi', $this->pershkrimi);
            $stmt->bindParam(':cmimi', $this->cmimi);
            $stmt->bindParam(':shtuar_nga', $this->shtuar_nga);
            $stmt->bindParam(':shtuar_ne', $this->shtuar_ne);
            
          
            $stmt->execute();
            echo"<script>
        alert('Te dhenat jane Vendos me Sukses!');
        document.location='shtoProdukte.php';
        </script>";

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    //metoda per me i shfaqe produktet

    public function shfaqTedhenat(){
        $sql = "SELECT foto, modeli, pershkrimi, cmimi, shtuar_nga FROM
        produktet";

        $stm = $this->dbconn->prepare($sql);
        $stm->execute();

        $rezultati = $stm->fetchAll(PDO::FETCH_ASSOC);
        return $rezultati;
    }
}

if (isset($_POST['save'])) {
    
    $product = new AddProducts();
    
  
    $product->setFoto($_POST['foto']);
    $product->setModeli($_POST['modeli']);
    $product->setPershkrimi($_POST['pershkrimi']);
    $product->setCmimi($_POST['cmimi']);
    $product->setShtuarNga($_POST['shtuar_nga']);
    $product->setShtuarNe($_POST['shtuar_ne']);
   
    $product->addProduct();
}

?>
