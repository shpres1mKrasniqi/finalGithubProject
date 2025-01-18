<?php

require_once('addProducts.php');
require_once('Blejvetur.php');

$tedhenat = new AddProducts();
$veturaID = null;

if (isset($_GET['id'])) {
    $idVetures = $_GET['id'];

    foreach ($tedhenat->shfaqTedhenat() as $value) {    
        if ($value['id'] == $idVetures) {
            $veturaID = $value;
            break;
        }
    }
} else {
    echo "<script>alert('ID e vetures nuk u dergua!');</script>";
    exit;
}

$blerja = new Blejvetur($idVetures);
$blerja->blej();

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="blej.css" />
    <title>Blerja e Produkteve</title>
</head>
<body>
    <div id="formulari">
        <h3>Blerja e Produkteve</h3>
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
                <h6><?php echo htmlspecialchars($veturaID['cmimi']); ?></h6>
            <?php endif; ?>

            <label for="kartela">Nr. Karteles tuaj:</label>
            <input type="text" class="inp" name="kartela" id="kartela" required>

            <button type="submit" name="save">SAVE</button>
        </form>
    </div>
    <script defer src="prodValidate.js"></script>
</body>
</html>
