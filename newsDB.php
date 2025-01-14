<?php
require_once 'KonektimimeDB.php';

class newsDB extends KonektimimeDB {
    private $dbconn;

    public function __construct() {
        $this->dbconn = $this->connectDB();
    }

    public function shtoNews($News) {
        $sql = "INSERT IGNORE INTO lajmet 
                (titulli, pershkrimi, foto, data_publikimit, shtuar_nga, modifikuar_nga)
                VALUES 
                (:titulli, :pershkrimi, :foto, :data_publikimit, :shtuar_nga, :modifikuar_nga)";
    
        $stmt = $this->dbconn->prepare($sql);
    
        foreach ($News as $New) {
            $stmt->execute([
                ':titulli' => $New['titulli'] ?? null,
                ':pershkrimi' => $New['pershkrimi'] ?? null,
                ':foto' => $New['foto'] ?? null,
                ':data_publikimit' => $New['data_publikimit'] ?? null,
                ':shtuar_nga' => $New['shtuar_nga'] ?? null,
                ':modifikuar_nga' => $New['modifikuar_nga'] ?? null,
            ]);
        }
    }

    public function perditesoNews($emri, $data) {
        $fields = [];
        $values = [];
        foreach ($data as $key => $value) {
            $fields[] = "$key = :$key";
            $values[":$key"] = $value;
        }
        $values[':titulli'] = $emri;

        $sql = "UPDATE lajmet SET " . implode(', ', $fields) . " WHERE titulli = :titulli";
        $stmt = $this->dbconn->prepare($sql);
        return $stmt->execute($values);
    }

    public function merrNews() {
        $sql = "SELECT * FROM lajmet";
        $stmt = $this->dbconn->query($sql);
        return $stmt->fetchAll();
    }
}
?>
