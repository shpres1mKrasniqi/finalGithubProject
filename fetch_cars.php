<?php

include 'config.php';
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'Veturat';

$conn = new mysqli($host, $username, $password, $dbname);

$sql = "SELECT * FROM Veturat";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<h2>" . $row['emri'] . "</h2>";
        echo "<p>" . $row['motorri'] . "</p>";
        echo "<p>" . $row['horsepower'] . "</p>";
        echo "<p>" . $row['shpejtesia'] . "</p>";
        echo "<p>" . $row['pershpejtimi'] . "</p>";
        echo "<p>" . $row['transmission'] . "</p>";
        echo "<p>" . $row['konsuminaftes'] . "</p>";
        echo "<p>" . $row['description'] . "</p>";
        echo "<p>Price: $" . $row['price'] . "</p>";
    }
} else {
    echo "Nuk ka vetura!";
}
?>