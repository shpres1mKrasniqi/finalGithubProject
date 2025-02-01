<?php
session_start();


if (!isset($_SESSION['emri'])) {
    header("Location: login.php");
    exit();
}

header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");
require_once('regjistri.php');
require_once 'teamMembers.php';

$teamMember = new TeamMember();
$members = $teamMember->getAllMembers();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About Us</title>
<link rel="stylesheet" href="admin.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<header>
    <nav>
        <div class="logo">
         <h1>About Us</h1>
        </div>
         <ul id="listaemenus">
            
             
            
             
             <li><a href="ContactUs.php">Contact Us</a></li>
             <li><a href="Produktet.php">Products</a></li>
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
     

    <?php foreach ($members as $member): ?>
            <div class="permbajtja">
                <img src="<?php echo htmlspecialchars($member->getImageUrl()); ?>" alt="Photo">
                <h2><?php echo htmlspecialchars($member->getName()); ?></h2>
                <p><strong><?php echo htmlspecialchars($member->getRole()); ?></strong></p>
                <p><?php echo htmlspecialchars($member->getDescription()); ?></p>
            </div>
        <?php endforeach; ?>
        
     
       
    </div>
</main>


<footer>


</footer>
</body>
</html>