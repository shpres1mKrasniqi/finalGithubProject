

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="shpresimi.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" crossorigin="anonymous" />
</head>
<body>
    <nav>
        <div class="logo">
            <h1>Admin</h1>
        </div>
        <ul id="listaemenus">
            <li><a href="signup.php">Signup</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="about.php">About Us</a></li>
        </ul>
        <div class="menuIcon">
            <i class="fa-solid fa-bars" onclick="menu()"></i>
        </div>
    </nav>

    <main>
        <div class="formcontaineri">
            <form action="validate.php" id="adminform" method="POST">
                <div class="h2">
                    <h2>Admin</h2>
                </div>
                <div class="emajliAdmin">
                    <input type="email" placeholder="Type Your Email" id="imejliAdminit" name="emailiAdmin">
                </div>
                <div class="pasijuAdmin">
                    <input type="password" placeholder="********" id="pasiiAdminit" name="pasiAdmin" >
                </div>
                <button type="submit" class="btn" id="btnadmin" name="loginAdmin">Login as Admin</button>
            </form>
        </div>
    </main>

    <script src="adminvalid.js"></script>
</body>
</html>
