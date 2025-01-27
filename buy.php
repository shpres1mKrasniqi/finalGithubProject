<?php

require_once('KonektimimeDB.php');
require_once('addProducts.php');
require_once('Blejvetur.php');

$tedhenat = new AddProducts();
$veturaID = null;

if (isset($_GET['id'])) {
    $idVetures = $_GET['id'];

    foreach ($tedhenat->shfaqProduktet() as $value) {    
        if ($value['id'] == $idVetures) {
            $veturaID = $value;
            break;
        }
    }
} else {
    echo "<script>alert('ID e vetures nuk u dergua!');</script>";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['save'])) {
    $blerja = new Blejvetur($idVetures, $_POST['emri'], $_POST['mbiemri'], $_POST['kartela']);
    $blerja->blej();
}

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="blej.css"/>
    <title>Blerja e Veturave</title>
</head>
<body>
    <div id="formulari">
        <h3>Blerja e Veturave</h3>
        <form action="" method="POST" id="shtoProduktetForma">
            <a href="produktet.php" style="text-decoration: none;">
                <button id="back" type="button">BACK</button>
            </a>

            <label for="emri">Emri:</label>
            <input type="text" class="inp" name="emri" id="emri" required>

            <label for="mbiemri">Mbiemri:</label>
            <input type="text" class="inp" name="mbiemri" id="mbiemri" required>
            
            <?php if ($veturaID): ?>
                <label for="cmimi">Cmimi i Vetures:</label>
                <h6><?php echo htmlspecialchars($veturaID['cmimi']); ?> &euro;</h6>
            <?php endif; ?>

            <label for="kartela">Kodi i Karteles tuaj:</label>
            <input type="text" class="inp" name="kartela" id="kartela" required>

            <button type="submit" name="save">BLEJ</button>
        </form>
    </div>
    <script defer src="blejvalid.js"></script>
</body>
</html>