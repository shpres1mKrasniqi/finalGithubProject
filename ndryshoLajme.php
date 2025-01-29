<?php
session_start();

if (!isset($_SESSION['admin_id'])) {
    header('Location: loginiAdmin.php');
    exit();
}

require_once('NewsManager.php');


$newsManager = new NewsManager();


if (!isset($_GET['id'])) {
    echo "<script>
        alert('ID e lajmit mungon!');
        document.location='adminNews.php';
    </script>";
    exit();
}

$id = $_GET['id'];
$record = $newsManager->lexoLajmetSipasID($id);

if (isset($_POST['edit'])) {
    $titulli = htmlspecialchars(trim($_POST['titulli']));
    $foto = htmlspecialchars(trim($_POST['foto']));
    $pershkrimi = htmlspecialchars(trim($_POST['pershkrimi']));
    $modifikuarNga = htmlspecialchars($_SESSION['admin_id']); 

    
    if (empty($titulli) || empty($foto) || empty($pershkrimi)) {
       return"Ploteso te gjitha fushat!";
    } else {
        
        $newsManager->setTitulli($titulli);
        $newsManager->setFoto($foto);
        $newsManager->setPershkrimi($pershkrimi);
        $newsManager->setModifikuarNga($modifikuarNga);

        
        $newsManager->ndryshoLajmin($id);

        echo "<script>
            alert('Lajmi u perditesua me sukses!');
            document.location='adminNews.php';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Modifikimi i Lajmeve</title>
    <link rel="stylesheet" href="shtoLajme.css">
</head>
<body>
    <div id="formulari">
        <h3>Modifikimi i Lajmeve</h3>
        <form action="" method="POST" id="shtoLajmet">
            <a href="adminNews.php" style="text-decoration: none;">
                <button id="back" type="button" onclick="window.location.href='adminNews.php';">BACK</button>
            </a>
            <label for="titulli">Titulli</label>
            <input type="text" name="titulli" id="titulli" value="<?php echo $record['titulli']; ?>">

            <label for="foto">Foto</label>
            <input type="text" name="foto" id="foto" value="<?php echo $record['foto']; ?>">

            <label for="pershkrimi">PÃ«rshkrimi</label>
            <textarea name="pershkrimi" id="pershkrimi" rows="4"><?php echo $record['pershkrimi']; ?></textarea>

            <label for="modifikuar_nga">Modifikuar Nga</label>
            <input type="text" name="modifikuar_nga" id="modifikuar_nga" readonly value="<?php echo $_SESSION['admin_id']; ?>">

            <button type="submit" name="edit">SAVE</button>
        </form>
    </div>
    <script defer src="shtoLajmeValid.js"></script>
</body>
</html>


