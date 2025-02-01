<?php

require_once('MenaxhoVeturat.php'); 


$newsManager = new MenaxhoVeturat();

if (isset($_GET['id'])) {
    $id = $_GET['id']; 
    $newsManager->deleteVeturat($id); 
}
$menaxhoVeturat = new MenaxhoVeturat();

if (isset($_GET['id'])) {
    $id = $_GET['id']; 
    $menaxhoVeturat->deleteVeturat($id); 

} else {
    echo "<script>alert('ID nuk eshte derguar!');</script>";
}
?>