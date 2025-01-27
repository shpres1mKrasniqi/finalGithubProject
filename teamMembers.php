<?php
require_once 'KonektimimeDB.php';

class TeamMember {
    private $conn;
    private $table = "TeamMembers";

    private $id;
    private $name;
    private $role;
    private $description;
    private $imageUrl;

    public function __construct() {
        $db = new KonektimimeDB();
        $this->conn = $db->connectDB();
    }

 
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getRole() {
        return $this->role;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getImageUrl() {
        return $this->imageUrl;
    }

 
    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setRole($role) {
        $this->role = $role;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setImageUrl($imageUrl) {
        $this->imageUrl = $imageUrl;
    }

   
    public function getAllMembers() {
        try {
            $query = "SELECT * FROM " . $this->table . " ORDER BY Id ASC";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();

            $teamMembers = [];
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $member = new TeamMember();
                $member->setId($row['Id']);
                $member->setName($row['Name']);
                $member->setRole($row['Role']);
                $member->setDescription($row['Description']);
                $member->setImageUrl($row['ImageUrl']);
                $teamMembers[] = $member;
            }
            return $teamMembers;
        } catch (PDOException $e) {
            echo "Gabim gjate marrjes se anetareve: " . $e->getMessage();
            return [];
        }
    }
}
?>