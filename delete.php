<?php

require_once('regjistri.php');


$teDhenat = new SignupForma();

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $teDhenat->fshijUserat($id);
}

else{
    echo "<script>alert('ID Nuk u dergua!');</script>";
}


?>