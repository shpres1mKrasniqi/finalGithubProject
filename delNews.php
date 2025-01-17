<?php

require_once('NewsManager.php'); 

$newsManager = new NewsManager(); 

if (isset($_GET['id'])) {
    $id = $_GET['id']; // 
    $newsManager->delNews($id); 
} else {
    echo "<script>alert('ID nuk eshte  derguar!');</script>";
}

?>
