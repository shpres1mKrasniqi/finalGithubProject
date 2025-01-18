<?php

class Blejvetur extends KonektimimeDB {

    private $vetura_id;
    private $emri;
    private $mbiemri;
    private $kartela;
    private $dbconn;

    public function __construct($vetura_id = '', $emri = '', $mbiemri = '', $kartela = '') {
        $this->vetura_id = $vetura_id;
        $this->emri = $emri;
        $this->mbiemri = $mbiemri;
        $this->kartela = $kartela;
        $this->dbconn = $this->connectDB();
    }

    public function blej() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['save'])) {
            $this->emri = $_POST['emri'] ?? '';
            $this->mbiemri = $_POST['mbiemri'] ?? '';
            $this->kartela = $_POST['kartela'] ?? '';

            if (!empty($this->emri) && !empty($this->mbiemri) && !empty($this->kartela)) {
                try {
                    $stmt = $this->dbconn->prepare("
                        INSERT INTO blejVetura (vetura_id, emri, mbiemri, nr_karteles) 
                        VALUES (:vetura_id, :emri, :mbiemri, :nr_karteles)
                    ");
                    $stmt->bindParam(':vetura_id', $this->vetura_id);
                    $stmt->bindParam(':emri', $this->emri);
                    $stmt->bindParam(':mbiemri', $this->mbiemri);
                    $stmt->bindParam(':nr_karteles', $this->kartela);

                    $stmt->execute();

                    echo "<script>alert('Blerja u krye me sukses!'); window.location.href='produktet.php';</script>";
                } catch (PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }
            } else {
                echo "<script>alert('Ju lutemi plotesoni te gjitha fushat!');</script>";
            }
        }
    }
}

?>
