<?php
session_start();

if (!isset($_SESSION['admin_id'])) {
    header('Location: loginiAdmin.php');
    exit();
}

require_once('MenaxhoVeturat.php');


$menaxhoVeturat = new MenaxhoVeturat();


if (!isset($_GET['id'])) {
    echo "<script>
        alert('ID e vetures mungon!');
        document.location='adminiVeturave.php';
    </script>";
    exit();
}

$id = $_GET['id'];
$record = $menaxhoVeturat->lexoVeturat($id);

if (isset($_POST['edit'])) {
    $titulli = htmlspecialchars(trim($_POST['titulli']));
    $foto = htmlspecialchars(trim($_POST['foto']));
    $pershkrimi = htmlspecialchars(trim($_POST['pershkrimi']));
    $modifikuarNga = htmlspecialchars($_SESSION['admin_id']); 

    
    if (empty($titulli) || empty($foto) || empty($pershkrimi)) {
        echo "<script>alert('Te gjitha fushat duhet te plotesohen!');</script>";
    } else {
        
        $menaxhoVeturat->setTitulli($titulli);
        $menaxhoVeturat->setFoto($foto);
        $menaxhoVeturat->setPershkrimi($pershkrimi);
        $menaxhoVeturat->setModifikuarNga($modifikuarNga);

        
        $menaxhoVeturat->editVeturat($id);

        echo "<script>
            alert('Vetura u editua me sukses!');
            document.location='adminiVeturave.php';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Modifikimi i Veturave</title>
    <link rel="stylesheet" href="editveturat.css">
</head>
<body>
    <div id="formulari">
        <h3>Modifikimi i Veturave</h3>
        <form action="" method="POST">
            <a href="adminiVeturave.php" style="text-decoration: none;">
                <button id="back" type="button" onclick="window.location.href='adminNews.php';">BACK</button>
            </a>
            <label for="titulli">Titulli</label>
            <input type="text" name="titulli" id="titulli" value="<?php echo $record['titulli']; ?>">

            <label for="foto">Foto</label>
            <input type="text" name="foto" id="foto" value="<?php echo $record['foto']; ?>">

            <label for="pershkrimi">Përshkrimi</label>
            <textarea name="pershkrimi" id="pershkrimi" rows="4"><?php echo $record['pershkrimi']; ?></textarea>

            <label for="modifikuar_nga">Modifikuar Nga</label>
            <input type="text" name="modifikuar_nga" id="modifikuar_nga" readonly value="<?php echo $_SESSION['admin_id']; ?>">

            <button type="submit" name="edit">SAVE</button>
        </form>
    </div>
</body>
</html>
