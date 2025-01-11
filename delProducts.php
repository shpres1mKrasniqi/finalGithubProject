<?php

    require_once('addProducts.php');

    $dhena  = new AddProducts();

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $dhena->delProducts($id);
    }
    else{
        echo "<script>alert('ID nuk eshte Derguar!');</script>";
    }

?>