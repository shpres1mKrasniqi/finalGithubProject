<?php
require_once('KonektimimeDB.php');  

class MenaxhoVeturat extends KonektimimeDB {
    
    private $id;
    private $titulli;
    private $foto;
    private $pershkrimi;
    private $shtuar_nga;
    private $modifikuar_nga;
    private $dbconn;

    public function __construct($id='', $titulli='', $foto='', $pershkrimi='', $shtuar_nga='', $modifikuar_nga='') {
        $this->id = $id;
        $this->titulli = $titulli;
        $this->foto = $foto;
        $this->pershkrimi = $pershkrimi;
        $this->shtuar_nga = $shtuar_nga;
        $this->modifikuar_nga = $modifikuar_nga;
        
        $this->dbconn = $this->connectDB();  
    }

   
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getTitulli() {
        return $this->titulli;
    }

    public function setTitulli($titulli) {
        $this->titulli = $titulli;
    }

    public function getFoto() {
        return $this->foto;
    }

    public function setFoto($foto) {
        $this->foto = $foto;
    }

    public function getPershkrimi() {
        return $this->pershkrimi;
    }

    public function setPershkrimi($pershkrimi) {
        $this->pershkrimi = $pershkrimi;
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

    public function shtoVeturat() {
        try {
            session_start();
            if (isset($_SESSION['admin_id'])) {
                $this->shtuar_nga = $_SESSION['admin_id'];
            } else {
                echo "Duhet te jeni te loguar si admin per te shtuar vetura.";
                return;
            }

            $stmt = $this->dbconn->prepare("INSERT INTO shto (titulli, foto, shtuar_nga,pershkrimi) 
                                            VALUES (:titulli, :foto,  :shtuar_nga,:pershkrimi,)");

            $stmt->bindParam(':titulli', $this->titulli);
            $stmt->bindParam(':foto', $this->foto);
            $stmt->bindParam(':shtuar_nga', $this->shtuar_nga);
            $stmt->bindParam(':pershkrimi', $this->pershkrimi);

            $stmt->execute();
            echo "<script>
            alert('Vetura  u shtua me sukses!');
            document.location='shtoVetura.php';
            </script>";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function shfaqVeturat(){
        $sql = "SELECT id, titulli, foto,  shtuar_nga, modifikuar_nga,pershkrimi, FROM shto";

        $stm = $this->dbconn->prepare($sql);
        $stm->execute();

        $rezultati = $stm->fetchAll(PDO::FETCH_ASSOC);
        return $rezultati;
    }

    public function deleteVeturat($id){
        $sql = "DELETE FROM shto WHERE id=:id";

        $stm = $this->dbconn->prepare($sql);
        $stm->bindParam(':id', $id);
        $stm->execute();

        if ($stm == true) {
            echo "<script>
            alert('Vetura me ID $id u fshi me sukses!');
            document.location='adminiVeturave.php';
            </script>";
        } else {
            return false;
        }
    }

    public function lexoVeturat($id){
        $sql = "SELECT * FROM shto WHERE id=:id";

        $stm = $this->dbconn->prepare($sql);
        $stm->execute([':id' => $id]);

        $rezultati = $stm->fetch(PDO::FETCH_ASSOC);
        return $rezultati;
    }

    public function editVeturat($id) {
        $sql = "UPDATE shto 
                SET titulli = :titulli, foto = :foto, modifikuar_nga = :modifikuar_nga, pershkrimi = :pershkrimi,
                WHERE id = :id";

        $stm = $this->dbconn->prepare($sql);
        $stm->bindParam(':titulli', $this->titulli);
        $stm->bindParam(':foto', $this->foto);
        $stm->bindParam(':modifikuar_nga', $this->modifikuar_nga);
        $stm->bindParam(':pershkrimi', $this->pershkrimi);
        $stm->bindParam(':id', $id);
        $stm->execute();
    }
}

if (isset($_POST['save'])) {
    $news = new MenaxhoVeturat();

    $news->setTitulli($_POST['titulli']);
    $news->setFoto($_POST['foto']);
    $news->setPershkrimi($_POST['pershkrimi']);
    $news->shtoVeturat();
}

?>

