<?php
session_start();  


if (!isset($_SESSION['admin_id'])) {
    
    header('Location: loginiAdmin.php'); 
    exit();  
}
require_once('addProducts.php');

?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="vendosprod.css" />
        <title> Shtimi i Produkteve</title>
    </head>
    <body>
        <div id="formulari">
            <h3>Shtimi i Produkteve</h3>
            <form action="" method="POST" id="shtoProduktetForma">
            <a href="adminLogin.php" style="text-decoration: none;">
                <button id="back" type="button" onclick="window.location.href='adminLogin.php';">BACK</button>
            </a>
                <label for="foto">Foto</label>
                <input type="file" name="foto" id="foto" accept="image/*" required>

                <label for="modeli">Modeli</label>
                <input type="text" class="inp" name="modeli" id="modeli" placeholder="Modeli"/>

                <label for="pershkrimi">Pershkrimi</label>
                <textarea class="inp" name="pershkrimi" id="pershkrimi" placeholder="Pershkrimi" rows="4"></textarea>

                <label for="cmimi">Cmimi</label>
                <input type="text" class="inp" name="cmimi" id="cmimi" placeholder="Cmimi">

                <label for="shtuar_nga">Shtuar Nga</label>
                <input type="text" class="inp" name="shtuar_nga" id="shtuar_nga" placeholder="Shtuar nga" readonly value="<?php echo $_SESSION['admin_id']; ?>"/>

                <button type="submit" name="blej">SAVE</button>
            </form>
        </div>
        <script defer src="prodValidate.js"></script>
    </body>
</html>

