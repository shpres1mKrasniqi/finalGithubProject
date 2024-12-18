<?php
require_once 'ConnectDB.php';

class VeturatDB extends ConnectDB {
    private $dbconn;

    public function __construct() {
        $this->dbconn = $this->connectDB();
    }

    public function shtoVeturat($veturat) {
        $sql = "INSERT IGNORE INTO Veturat (emri, motorri, horsepower, shpejtesia, pershpejtimi, transmission, konsuminaftes, price, description)
                VALUES (:emri, :motorri, :horsepower, :shpejtesia, :pershpejtimi, :transmission, :konsuminaftes, :price, :description)";

        $stmt = $this->dbconn->prepare($sql);
        foreach ($veturat as $vetura) {
            $stmt->execute([
                ':emri' => $vetura['emri'],
                ':motorri' => $vetura['motorri'],
                ':horsepower' => $vetura['horsepower'],
                ':shpejtesia' => $vetura['shpejtesia'],
                ':pershpejtimi' => $vetura['pershpejtimi'],
                ':transmission' => $vetura['transmission'],
                ':konsuminaftes' => $vetura['konsuminaftes'],
                ':price' => (float)$vetura['price'],
                ':description' => $vetura['description']
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