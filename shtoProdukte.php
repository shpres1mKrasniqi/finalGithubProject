<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['admin_id'])) {
    header('Location: loginiAdmin.php');
    exit();
}
require_once('AddProducts.php');


?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="vendosprod.css" />
    <title>Shto Produkte</title>
</head>
<body>
    <div id="formulari">
        <h3>Shtimi i Produktev</h3>
        <form action="" method="POST">
            <a href="adminLogin.php" style="text-decoration: none;">
                <button id="back" type="button">BACK</button>
            </a>

            <label for="modeli">Modeli</label>
            <input type="text" class="inp"  name="modeli" id="modeli" placeholder="Modeli" >

            <label for="foto">Foto</label>
            <input type="file" class="inp"  name="foto" id="foto" accept="image/*" >

            <label for="pershkrimi">Pershkrimi</label>
            <textarea class="inp" name="pershkrimi" id="pershkrimi" placeholder="Pershkrimi i Produktit" rows="5" ></textarea>

            <label for="cmimi">Cmimi:</label>
          <input type="number"  class="inp" id="cmimi" name="cmimi" placeholder="Cmimi i produktit" ><br><br>


            <button type="submit" name="save">SAVE</button>
        </form>
    </div>
    <script defer src="prodValidate.js"></script>
</body>
</html>

<?php
?>

