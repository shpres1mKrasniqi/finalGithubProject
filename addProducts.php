<?php

require_once('KonektimimeDB.php');  

class AddProducts extends KonektimimeDB {
    
    private $id;
    private $modeli;
    private $foto;
    private $pershkrimi;
    private $cmimi;
    private $shtuar_nga;
    private $modifikuar_nga;
    private $dbconn;

    public function __construct($id='', $modeli='', $foto='', $pershkrimi='', $cmimi='', $shtuar_nga='', $modifikuar_nga='') {
        $this->id = $id;
        $this->modeli = $modeli;
        $this->foto = $foto;
        $this->pershkrimi = $pershkrimi;
        $this->cmimi = $cmimi;
        $this->shtuar_nga = $shtuar_nga;
        $this->modifikuar_nga = $modifikuar_nga;
      
        $this->dbconn = $this->connectDB();  
    }

    public function getID(){
        return $this->id;
    }

    public function setID($id){
        $this->id=$id;
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

    public function getModifikuarNga() {
        return $this->modifikuar_nga;
    }

    public function setModifikuarNga($modifikuar_nga) {
        $this->modifikuar_nga = $modifikuar_nga;
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

            $stmt = $this->dbconn->prepare("INSERT INTO produktet (foto, modeli, pershkrimi, cmimi, shtuar_nga) 
                                            VALUES (:foto, :modeli, :pershkrimi, :cmimi, :shtuar_nga)");
            
       
            $stmt->bindParam(':foto', $this->foto);
            $stmt->bindParam(':modeli', $this->modeli);
            $stmt->bindParam(':pershkrimi', $this->pershkrimi);
            $stmt->bindParam(':cmimi', $this->cmimi);
            $stmt->bindParam(':shtuar_nga', $this->shtuar_nga);
          
            
          
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
        $sql = "SELECT id, foto, modeli, pershkrimi, cmimi, shtuar_nga, modifikuar_nga FROM
        produktet";

        $stm = $this->dbconn->prepare($sql);
        $stm->execute();

        $rezultati = $stm->fetchAll(PDO::FETCH_ASSOC);
        return $rezultati;
    }

    //metoda me fshi Produkte:

    public function delProducts($id){

        $sql=  "DELETE FROM produktet where id=:id";

        $stm = $this->dbconn->prepare($sql);
        $stm->bindParam(':id',$id);
        $stm->execute();

        if($stm==true){
            echo"<script>
            alert('Produkti me id $id eshte Fshire me Sukses!');
            document.location='adminProducts.php';
            </script>";
        }
        else{
            return false;
        }
    }

    //metoda Update Per produktet: 


    public function lexoProduktetSipasID($id){

        $sql="SELECT * FROM produktet WHERE id=:id";

        $stm = $this->dbconn->prepare($sql);
        $stm->execute([':id'=> $id]);

        $rezultati = $stm->fetch(PDO::FETCH_ASSOC);
        return $rezultati;
    }

    public function ndryshoProdukt($id) {
        $sql = "UPDATE produktet 
                SET foto = :foto, modeli = :modeli, pershkrimi = :pershkrimi, cmimi = :cmimi, modifikuar_nga = :modifikuar_nga 
                WHERE id = :id";
    
        $stm = $this->dbconn->prepare($sql);
        $stm->bindParam(':foto', $this->foto);
        $stm->bindParam(':modeli', $this->modeli);
        $stm->bindParam(':pershkrimi', $this->pershkrimi);
        $stm->bindParam(':cmimi', $this->cmimi);
        $stm->bindParam(':modifikuar_nga', $this->modifikuar_nga);
        $stm->bindParam(':id', $id);
        $stm->execute();
    }
    
}

//shtimi i produkteve:

if (isset($_POST['save'])) {
    
    $product = new AddProducts();
    
  
    $product->setFoto($_POST['foto']);
    $product->setModeli($_POST['modeli']);
    $product->setPershkrimi($_POST['pershkrimi']);
    $product->setCmimi($_POST['cmimi']);
    $product->setShtuarNga($_POST['shtuar_nga']);
  

    $product->addProduct();
}



?>
