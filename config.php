<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'Veturat';

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Lidhja deshtoi: " . $conn->connect_error);
}
?>