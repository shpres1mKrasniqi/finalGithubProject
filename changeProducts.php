<?php
session_start();

if (!isset($_SESSION['admin_id'])) {
    header('Location: loginiAdmin.php');
    exit();
}

require_once('addProducts.php');

$teDheat = new AddProducts();

$id = $_GET['id'];
$record = $teDheat->lexoProduktetSipasID($id);

if (isset($_POST['edit'])) {
   
    $foto = htmlspecialchars(trim($_POST['foto']));
    $modeli = htmlspecialchars(trim($_POST['modeli']));
    $pershkrimi = htmlspecialchars(trim($_POST['pershkrimi']));
    $cmimi = htmlspecialchars(trim($_POST['cmimi']));
    $modifikuarNga = htmlspecialchars($_SESSION['admin_id']); 

    if (empty($foto) || empty($modeli) || empty($pershkrimi) || empty($cmimi)) {
        echo "<script>alert('Te gjitha fushat duhet te plotesohen!');</script>";
    }

 else {
        
        $teDheat->setFoto($foto);
        $teDheat->setModeli($modeli);
        $teDheat->setPershkrimi($pershkrimi);
        $teDheat->setCmimi($cmimi);
        $teDheat->setModifikuarNga($modifikuarNga);
        $teDheat->ndryshoProdukt($id);

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
    <link rel="stylesheet" href="vendosprod.css" />
    <title>Modifikimi i Produkteve</title>
</head>
<body>
    <div id="formulari">
        <h3>Modifikimi i Produkteve</h3>
        <form action="" method="POST">
            <a href="adminLogin.php" style="text-decoration: none;">
                <button id="back" type="button" onclick="window.location.href='adminLogin.php';">BACK</button>
            </a>
            <label for="foto">Foto</label>
            <input type="text" name="foto" id="foto" value="<?php echo $record['foto']; ?>">

            <label for="modeli">Modeli</label>
            <input type="text" class="inp" name="modeli" id="modeli" value="<?php echo $record['modeli']; ?>" placeholder="Modeli">

            <label for="pershkrimi">Pershkrimi</label>
            <textarea class="inp" name="pershkrimi" id="pershkrimi" placeholder="Pershkrimi" rows="4" required><?php echo $record['pershkrimi']; ?></textarea>

            <label for="cmimi">Cmimi</label>
            <input type="text" class="inp" name="cmimi" id="cmimi" value="<?php echo $record['cmimi']; ?>" placeholder="Cmimi">

            <label for="modifikuar_nga">Modifikuar Nga</label>
            <input type="text" class="inp" name="modifikuar_nga" id="modifikuar_nga" readonly value="<?php echo $_SESSION['admin_id']; ?>">

            <button type="submit" name="edit">SAVE</button>
        </form>
    </div>
</body>
</html>
