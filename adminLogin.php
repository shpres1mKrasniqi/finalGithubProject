<?php
session_start();



if (!isset($_SESSION['admin_id'])) {

    header("Location: loginiAdmin.php");
    exit();

}

echo "Ju jeni kyqur si admin me ID: " . $_SESSION['admin_id'];
require_once('regjistri.php');

$tedhenat = new SignupForma();

$userateRi = $tedhenat->userateRi();

$adminatNumri = $tedhenat->adminatNumri();

$numriProdukteve = $tedhenat->numeroProduktet();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Dashboard</title>
<link rel="stylesheet" href="admin.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<header>
    <nav>
        <div class="logo">
         <h1>Admin</h1>
        </div>
         <ul id="listaemenus">
             <li><a href="shtoLajme.php">Add News</a></li>
             <li><a href="leximiUserave.php">Users</a></li>
             <li><a href="shtoProdukte.php">Add Products</a></li>
            <li><a href="lexoBlerjet.php">Sales</a></li>
             <li><a href="shtoVetura.php">Add Cars</a></li>
             <li><a href="lexoMesazhet.php">Read Messages</a></li>
             <li><a href="logout.php" onclick="return confirm('A jeni i sigurt qe deshironi te dilni?');">LogOut</a></li>




         </ul>
         <div class="menuIcon">

             <i class="fa-solid fa-bars" onclick="menu()"></i>
         </div>
     </nav>
<script>
 
 let listaemenus = document.getElementById("listaemenus")
 listaemenus.style.maxHeight="0px";

 function menu(){
     if(listaemenus.style.maxHeight=="0px"){
         listaemenus.style.maxHeight="300px";
     }
     else{
         listaemenus.style.maxHeight="0px";
     }
 }
</script>
<script src="https://kit.fontawesome.com/f8e1a90484.js" crossorigin="anonymous"></script>
</header>

<main>
    <div class="contenjeri">
     

        <div class="permbajtja">
            <img src="fotot/userat.png" alt="statistikat per userat e ri">
            <h3>New Users</h3>
            <p>Total</p>
            <h6><?php echo $userateRi;?></h6>   
    
        </div>
        <div class="permbajtja">
            <img src="fotot/logojaeAdmin.png" alt="statistikat per userat e ri">
            <h3>Administrators</h3>
            <p>Total</p>
            <h6><?php echo $adminatNumri;?></h6>   
    
        </div>

        <div class="permbajtja">
            <img src="fotot/animatedCars.png" alt="statistikat per userat e ri">
            <h3>Products</h3>
            <p>Total</p>
            <h6><?php echo $numriProdukteve;?></h6>   
    
        </div>
    </div>
</main>


<footer>


</footer>
</body>
</html>