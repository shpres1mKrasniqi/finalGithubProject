<?php

require_once('regjistri.php');

$teDhenat = new SignupForma();

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $teDhenat->fshijUserat($id);
    echo"Te dhenat u fshine me sukses!";
}

else{
    echo"Te dhenat nuk u fshine, ID nuk u dergua!";
}

?>