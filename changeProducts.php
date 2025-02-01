<?php
session_start();

if (!isset($_SESSION['admin_id'])) {
    header('Location: loginiAdmin.php');
    exit();
}

require_once('addProducts.php');

$prod = new AddProducts();

if (!isset($_GET['id'])) {
    echo "<script>
        alert('ID e produktit mungon!');
        document.location='adminProducts.php';
    </script>";
    exit();
}

$id = $_GET['id'];
$record = $prod->lexoProdukteSipasId($id);

if (isset($_POST['edit'])) {
    $modeli = htmlspecialchars(trim($_POST['modeli']));
    $foto = htmlspecialchars(trim($_POST['foto']));
    $pershkrimi = htmlspecialchars(trim($_POST['pershkrimi']));
    $cmimi = htmlspecialchars(trim($_POST['cmimi']));
    $modifikuar_nga = htmlspecialchars($_SESSION['admin_id']); 

    if (empty($modeli) || empty($pershkrimi) || empty($foto) || empty($cmimi)) {
        return"Ploteso fushat!";
    } else {
    
        $prod->set_modeli($modeli);
        $prod->set_foto($foto);
        $prod->set_pershkrimi($pershkrimi);
        $prod->set_cmimi($cmimi);
        $prod->set_modifikuar_nga($modifikuar_nga);

        
        $prod->ndryshoProduktin($id);

        echo "<script>
            alert('Produkti u perditesua me sukses!');
            document.location='adminProducts.php';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Modifikimi i Produkteve</title>
    <link rel="stylesheet" href="vendosprod.css">
</head>
<body>
    <div id="formulari">
        <h3>Modifikimi i Produkteve</h3>
        <form action="" method="POST">
            <a href="adminProducts.php" style="text-decoration: none;">
                <button id="back" type="button" onclick="window.location.href='adminProducts.php';">BACK</button>
            </a>
            <label for="modeli">Modeli</label>
            <input type="text" class="inp" name="modeli" id="modeli" value="<?php echo $record['modeli']; ?>">

            <label for="foto">Foto</label>
            <input type="text" class="inp" name="foto" id="foto" value="<?php echo $record['foto']; ?>">

            <label for="pershkrimi">Përshkrimi</label>
            <textarea class="inp" name="pershkrimi" id="pershkrimi" rows="4"><?php echo $record['pershkrimi']; ?></textarea>
            <label for="cmimi">Cmimi:</label>
            <input type="number" class="inp" id="cmimi" name="cmimi" placeholder="Cmimi i produktit" value="<?php echo $record['cmimi']; ?>"><br><br>


            <label for="modifikuar_nga">Modifikuar Nga</label>
            <input type="text" class="inp" name="modifikuar_nga" id="modifikuar_nga" readonly value="<?php echo $_SESSION['admin_id']; ?>">

            <button type="submit" name="edit">SAVE</button>
        </form>
    </div>
    <script defer src="prodValidate.js"></script>
</body>
</html>
