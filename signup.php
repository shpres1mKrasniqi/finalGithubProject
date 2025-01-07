<?php

    require_once('regjistri.php');

    if(isset($_POST['save'])){
        $regj = new SignupForma();
        $regj ->setEmri($_POST['emri']);
        $regj->setMbiemri($_POST['mbiemri']);
        $regj->setEmaili($_POST['emaili']);
        $regj->setPaswordi($_POST['paswordi']);
        $regj->setConfirmPaswordi($_POST['confirmPaswordi']);

        $regj-> regjistrimi();
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="shpresimi.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   
</head>
<body>
<header>

    <nav>
        <div class="logo">
         <h1>SRF AutoCenter</h1>
        </div>
         <ul id="listaemenus">
             <li><a href="aboutUs.html">About Us</a></li>
             <li><a href="loginiAdmin.html">Admin</a></li>
             <li><a href="contactus.html">Contact Us</a></li>
         </ul>
         <div class="menuIcon">

             <i class="fa-solid fa-bars" onclick="menu()"></i>
         </div>
     </nav>

 <script src="https://kit.fontawesome.com/f8e1a90484.js" crossorigin="anonymous"></script>
</header>
 <main>

    <div class="signupContainer">

        <form action='signup.php' id="signupforma" class="formaSignup" method="POST">
           
                <div class="h2">
                    <h2>Signup</h2>
                </div>
                <div class="emri">
                    <input type="text" placeholder=" First Name"  id="emri" name="emri" >
                   
                </div>
        
                <div class="mbiemri">
                    <input type="text" placeholder=" Last Name"  id="mbiemri" name="mbiemri" >
                
                </div>
                <div class="emajli">
                    <input type="email" placeholder="Email"  id="imejli" name="emaili" >
                
                </div>
                <div class="pasi">
                    <input type="password" placeholder=" Password" id="fjalekalimi" name="paswordi" >
                    
                </div>
                <div class="pasidyt">
                    <input type="password" placeholder="Confirm Password" id="fjalekalimi2" name="confirmPaswordi" >
                   
                </div>
                <div class="skeAcc">
                    <p>Don't have an account? <a href="login.html">Login</a></p>
                </div>
                    <button type="submit" class="btnSignup" name="save">Signup</button>
            </form>
            </div>
 </main>

 <script defer src="validimi.js"></script>
 
</body>
</html>