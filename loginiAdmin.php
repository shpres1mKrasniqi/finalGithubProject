<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="shpresimi.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
        <nav>
           <div class="logo">
            <h1>Admin</h1>
           </div>
            <ul id="listaemenus">
                <li><a href="signup.html">Signup</a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="contactus.html">Contact Us</a></li>
            </ul>
            <div class="menuIcon">

                <i class="fa-solid fa-bars" onclick="menu()"></i>
            </div>
        </nav>

<script src="https://kit.fontawesome.com/f8e1a90484.js" crossorigin="anonymous"></script>

<main>
    <div class="formcontaineri">
    <form action="#" id="adminform">
       
            <div class="h2">
                <h2>Admin</h2>
            </div>
            <div class="emajliAdmin">
                <input type="email" placeholder="Type Your Email"  id="imejliAdminit">
            </div>
    
            <div class="pasijuAdmin">
                <input type="password" placeholder="********"  id="pasiiAdminit">
            </div>
           
                <button type="submit" class="btn">Login as Admin</button>
           
        </form>
        </div>
</main>

<script src="adminvalid.js"></script>
</body>
</html>

