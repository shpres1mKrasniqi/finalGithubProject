<?php
session_start();
if (!isset($_SESSION['emri'])) {
    header("Location: login.php");
    exit();
}

header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");
    require_once('contactphp.php');


    
    if (isset($_POST['save'])) {
        $regjistro = new ContactUsPHP();

        
        $regjistro->setEmriDheMbiemri($_POST['emridheMbiemri']);
        $regjistro->setEmail($_POST['email']);
        $regjistro->setMesazhi($_POST['mesazhi']);
        
      
        $regjistro->shtoMesazh();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="ContactUs.css">
</head>
<body>
    <div class="contact-us">
        <div class="contact-container">
            <h2>Na Kontaktoni</h2>
            <p>Jemi ketu per te ndihmuar! Na kontaktoni per cdo pyetje apo sugjerim lidhur me Autosallonin tone.</p>
            <form action="" method="POST" class="contact-form" id="kontaktimi">
                <div class="form-group">
                    <label for="name">Emri dhe mbiemri juaj</label>
                    <input type="text" id="name" name="emridheMbiemri" placeholder="Shkruani emrin dhe mbiemrin tuaj">
                </div>
                <div class="form-group">
                    <label for="email">Email-i juaj</label>
                    <input type="email" id="email" name="email" placeholder="Shkruani email-in tuaj">
                </div>
                <div class="form-group">
                    <label for="message">Mesazhi juaj</label>
                    <textarea id="message" name="mesazhi" placeholder="Shkruani mesazhin tuaj" rows="4"></textarea>
                </div>
                <button type="submit" class="buton" name="save">Dergo</button>
            </form>
        </div>
    </div>
    <script defer src="contact.js"></script>
</body>
</html>