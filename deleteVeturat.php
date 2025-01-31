<?php

require_once('MenaxhoVeturat.php'); 

<<<<<<< HEAD
$newsManager = new MenaxhoVeturat();

if (isset($_GET['id'])) {
    $id = $_GET['id']; 
    $newsManager->deleteVeturat($id); 
=======
$menaxhoVeturat = new MenaxhoVeturat();

if (isset($_GET['id'])) {
    $id = $_GET['id']; 
    $menaxhoVeturat->deleteVeturat($id); 
>>>>>>> 4085cec11b7414cd043510534f66c709a06fa274
} else {
    echo "<script>alert('ID nuk eshte derguar!');</script>";
}

?>

