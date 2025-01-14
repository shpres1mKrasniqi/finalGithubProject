<?php
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
            <p>Jemi kÃ«tu pÃ«r tÃ« ndihmuar! Na kontaktoni pÃ«r Ã§do pyetje apo sugjerim lidhur me Autosallonin tonÃ«.</p>
            <form action="" method="POST" class="contact-form">
                <div class="form-group">
                    <label for="name">Emri dhe mbiemri juaj</label>
                    <input type="text" id="name" name="emridheMbiemri" placeholder="Shkruani emrin dhe mbiemrin tuaj" required>
                </div>
                <div class="form-group">
                    <label for="email">Email-i juaj</label>
                    <input type="email" id="email" name="email" placeholder="Shkruani email-in tuaj" required>
                </div>
                <div class="form-group">
                    <label for="message">Mesazhi juaj</label>
                    <textarea id="message" name="mesazhi" placeholder="Shkruani mesazhin tuaj" rows="4" required></textarea>
                </div>
                <button type="submit" class="buton" name="save">Dergo</button>
            </form>
        </div>
    </div>
</body>
</html>