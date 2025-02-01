<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['admin_id'])) {
    header('Location: loginiAdmin.php');
    exit();
}

require_once('MenaxhoVeturat.php');
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="shtoLajme.css" />
   
    <title>Shto Veturat</title>
</head>
<body>
    <div id="formulari">
        <h3>Shtimi i Veturave</h3>
        <form action="" method="POST">
            <a href="adminLogin.php" style="text-decoration: none;">
                <button id="back" type="button">BACK</button>
            </a>

            <label for="titulli">Titulli</label>
            <input type="text" name="titulli" id="titulli" placeholder="Emri i Vetures" required>

            <label for="foto">Foto</label>
            <input type="file" name="foto" id="foto" accept="image/*" required>

            <label for="pershkrimi">Pershkrimi</label>
            <textarea name="pershkrimi" id="pershkrimi" placeholder="Pershkrimi i Vetures" rows="10" required></textarea>

            <button type="submit" name="save">SAVE</button>
        </form>
    </div>
</body>
</html>
