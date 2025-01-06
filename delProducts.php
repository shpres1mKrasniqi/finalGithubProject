<?php

    require_once('addProducts.php');

    $dhena  = new AddProducts();

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $dhena->delProducts($id);
        echo" Produkti me id $id u fshi me sukses!";
    }
    else{
        echo"ID nuk eshte derguar!";
    }

?>