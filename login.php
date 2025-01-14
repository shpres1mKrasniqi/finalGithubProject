<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="shpresimi.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
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

<main>
    <div class="formcontaineri">
    <form action="loginVerify.php" method="POST" id="form">
       
            <div class="h2">
                <h2>Login</h2>
            </div>
            <div class="emajli">
                <input type="email" name="email" placeholder="Type Your Email" id="imejliUser">
            </div>
    
            <div class="pasi">
                <input type="password" name="password" placeholder="Password" id="pasiiUser">
            </div>
            <div class="dont">
                <p>Don't have an account? <a href="signup.html">Sign Up</a></p>
            </div>
           
                <button type="submit" class="btn">Login</button>
           
        </form>
        </div>
</main>

<script defer src="logValidimi.js"></script>
</body>
</html>
