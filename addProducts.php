<?php

require_once('KonektimimeDB.php');

class AddProducts extends KonektimimeDB{
    private $id;
    private $foto;
    private $modeli;
    
    private $pershkrimi;
    private $cmimi;
    private $shtuar_nga;
    private $modifikuar_nga;
    
    private $dbconn;

    public function __construct($id='', $foto='', $modeli='', $pershkrimi='', $cmimi='', $shtuar_nga='', $modifikuar_nga=''){
        $this->id = $id;
        $this->foto = $foto;
        $this->modeli = $modeli;
        $this->pershkrimi=$pershkrimi;
        $this->cmimi = $cmimi;
        $this->shtuar_nga = $shtuar_nga;
        $this->modifikuar_nga = $modifikuar_nga;
        $this->dbconn=$this->connectDB();
    }

    public function getID(){
        return $this->id;
    }
    public function get_foto(){
        return $this->foto;

    }
    public function get_modeli(){
        return $this->modeli;
    }
    public function get_pershkrimi(){
        return $this->pershkrimi;
    }
    public function get_cmimi(){
        return $this->cmimi;
    }
    public function get_shtuar_nga(){
        return $this->shtuar_nga;
    }
    public function get_modifikuar_nga(){
        return $this->modifikuar_nga;

    }
    
    public function setID( $id ){
        $this->id = $id;

    }
    public function set_foto( $foto ){
        $this->foto = $foto;

    }
    public function set_modeli( $modeli ){
        $this->modeli = $modeli;
    }
    public function set_pershkrimi(
        $pershkrimi){
            $this->pershkrimi=$pershkrimi;

        }
        public function set_cmimi(
            $cmimi){    

                $this->cmimi = $cmimi;

            }

            public function set_shtuar_nga(
                $shtuar_nga){
                    $this->shtuar_nga = $shtuar_nga;
                }

            public function set_modifikuar_nga(
                $modifikuar_nga){   
                    $this->modifikuar_nga = $modifikuar_nga;    

                }

                public function shtoProdukte(){
                    try{
                        if (session_status() === PHP_SESSION_NONE) {
                            session_start();
                        }

                        if (isset($_SESSION['admin_id'])) {
                            $this->shtuar_nga = $_SESSION['admin_id'];
                        } else {
                            echo "Duhet te jeni te loguar si admin per te shtuar Produkte.";
                            return;
                        }

                        if (empty($this->foto) || empty($this->modeli) || empty($this->pershkrimi) || empty($this->cmimi)) {
                            
                            return "Ploteso te gjitha fushat";
                        }
            
                        $stm= $this->dbconn->prepare("INSERT INTO produktet(foto, modeli, pershkrimi, cmimi, shtuar_nga)
                        values(:foto, :modeli, :pershkrimi, :cmimi, :shtuar_nga)") ;
                        $stm->bindParam(':foto', $this->foto);
                        $stm->bindParam(':modeli',$this->modeli);
                        $stm->bindParam(':pershkrimi',$this->pershkrimi);
                        $stm->bindParam(':cmimi',$this->cmimi);
                        $stm->bindParam(':shtuar_nga',$this->shtuar_nga);
                        $stm->execute();
                        echo "<script>
                        alert('Produkti u shtua me sukses!');
                        document.location='shtoProdukte.php';
                        </script>";
                    }

                    catch(Exception $e){
                        die('Gabim: '. $e->getMessage());
                    }
                }

                public function shfaqProduktet(){
                    $sql = "SELECT  id, foto, modeli, pershkrimi, cmimi, shtuar_nga, modifikuar_nga from produktet";
                    $stm = $this->dbconn->prepare($sql);
                    $stm->execute();
            
                    $rezultati = $stm->fetchAll(PDO::FETCH_ASSOC);
                    return $rezultati;
                }

    
    public function delProducts($id){
        $sql = "DELETE from produktet where id=:id";
        $stm = $this->dbconn->prepare($sql);
        $stm->bindParam(':id', $id);
        $stm->execute();

        if ($stm == true) {
            echo "<script>
            alert('Produkti me ID $id u fshi me sukses!');
            document.location='adminProducts.php';
            </script>";
        } else {
            return false;
        }
    }

    public function lexoProdukteSipasId($id){
        $sql = "SELECT * FROM produktet where id=:id";
        $stm = $this->dbconn->prepare($sql);
        $stm->execute([':id'=>$id]);

        $rezultati = $stm->fetch(PDO::FETCH_ASSOC);
        return $rezultati;
    }

    public function ndryshoProduktin($id) {
        $sql = "UPDATE produktet 
                SET foto = :foto, 
                    modeli = :modeli, 
                    pershkrimi = :pershkrimi, 
                    cmimi = :cmimi, 
                    modifikuar_nga = :modifikuar_nga
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

if (isset($_POST['foto'], $_POST['modeli'], $_POST['pershkrimi'], $_POST['cmimi'])) {
    $producti = new AddProducts();
    $producti->set_foto($_POST['foto']);
    $producti->set_modeli($_POST['modeli']);
    $producti->set_pershkrimi($_POST['pershkrimi']);
    $producti->set_cmimi($_POST['cmimi']);
    $producti->shtoProdukte();
} 


?>
