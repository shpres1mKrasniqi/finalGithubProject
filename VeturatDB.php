<?php
require_once 'ConnectDB.php';

class VeturatDB extends ConnectDB {
    private $dbconn;

    public function __construct() {
        $this->dbconn = $this->connectDB();
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
                ':motorri' => empty(trim($vetura['motorri'])) ? null : $vetura['motorri'],
                ':horsepower' => empty(trim($vetura['horsepower'])) ? null : $vetura['horsepower'],
                ':shpejtesia' => empty(trim($vetura['shpejtesia'])) ? null : $vetura['shpejtesia'],
                ':pershpejtimi' => empty(trim($vetura['pershpejtimi'])) ? null : $vetura['pershpejtimi'],
                ':transmission' => empty(trim($vetura['transmission'])) ? null : $vetura['transmission'],
                ':konsuminaftes' => empty(trim($vetura['konsuminaftes'])) ? null : $vetura['konsuminaftes'],
                ':komoditeti' => empty(trim($vetura['komoditeti'])) ? null : $vetura['komoditeti'],
                ':materialet_brenda' => empty(trim($vetura['materialet_brenda'])) ? null : $vetura['materialet_brenda'],
                ':price' => (float)($vetura['price'] ?? 0),
                ':description' => empty(trim($vetura['description'])) ? null : $vetura['description'],
            ]);
        }
    }
    

    public function perditesoVeturat($emri, $data) {
        $fields = [];
        $values = [];
        foreach ($data as $key => $value) {
            $fields[] = "$key = :$key";
            $values[":$key"] = $value;
        }
        $values[':emri'] = $emri;

        $sql = "UPDATE Veturat SET " . implode(', ', $fields) . " WHERE emri = :emri";
        $stmt = $this->dbconn->prepare($sql);
        return $stmt->execute($values);
    }

    public function merrVeturat() {
        $sql = "SELECT * FROM Veturat";
        $stmt = $this->dbconn->query($sql);
        return $stmt->fetchAll();
    }
}
?>