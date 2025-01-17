<?php

require_once 'ConnectDB.php';

class VeturatDB {
    private $dbconn;

    public function __construct() {
        $this->dbconn = ConnectDB::getInstance()->getConnection();
    }

    public function shtoVeturat($veturat) {
        $sql = "INSERT IGNORE INTO Veturat 
                (emri, motorri, horsepower, shpejtesia, pershpejtimi, transmission, konsuminaftes, komoditeti, materialet_brenda, price, description)
                VALUES 
                (:emri, :motorri, :horsepower, :shpejtesia, :pershpejtimi, :transmission, :konsuminaftes, :komoditeti, :materialet_brenda, :price, :description)";
        
        $stmt = $this->dbconn->prepare($sql);

        foreach ($veturat as $vetura) {
            $stmt->execute([
                ':emri' => $vetura['emri'] ?? null,
                ':motorri' => $vetura['motorri'] ?? null,
                ':horsepower' => $vetura['horsepower'] ?? null,
                ':shpejtesia' => $vetura['shpejtesia'] ?? null,
                ':pershpejtimi' => $vetura['pershpejtimi'] ?? null,
                ':transmission' => $vetura['transmission'] ?? null,
                ':konsuminaftes' => $vetura['konsuminaftes'] ?? null,
                ':komoditeti' => $vetura['komoditeti'] ?? null,
                ':materialet_brenda' => $vetura['materialet_brenda'] ?? null,
                ':price' => (float) ($vetura['price'] ?? 0),
                ':description' => $vetura['description'] ?? null,
              //  ':foto' =>$vetura['foto']?? null,
            ]);
        }
    }




   
    public function merrVeturat() {
        $sql = "SELECT * FROM Veturat";
        $stmt = $this->dbconn->query($sql);
        return $stmt->fetchAll();
    }

   
    public function merrVetura(string $emri) {
        $sql = "SELECT * FROM Veturat WHERE emri = :emri";
        $stmt = $this->dbconn->prepare($sql);
        $stmt->execute([':emri' => $emri]);
        return $stmt->fetch();
    }

   
    public function perditesoVeturat(string $emri, array $data) {
        $fields = [];
        foreach ($data as $key => $value) {
            $fields[] = "$key = :$key";
        }
        $sql = "UPDATE Veturat SET " . implode(', ', $fields) . " WHERE emri = :emri";
        $stmt = $this->dbconn->prepare($sql);
        $data['emri'] = $emri;
        return $stmt->execute($data);
    }

 
    public function fshiVetura(string $emri) {
        $sql = "DELETE FROM Veturat WHERE emri = :emri";
        $stmt = $this->dbconn->prepare($sql);
        return $stmt->execute([':emri' => $emri]);
    }

    
    public function fshiTeGjithaVeturat() {
        $sql = "DELETE FROM Veturat";
        $stmt = $this->dbconn->prepare($sql);
        return $stmt->execute();
    }
}

?>
