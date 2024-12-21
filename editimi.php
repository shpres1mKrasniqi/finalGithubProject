<?php 

    require_once('regjistri.php');

    $tedhenat = new SignupForma();
    $id = $_GET['id'];

    $record = $tedhenat->lexoSipasID($id);

    if(isset($_POST['edit'])){
        $tedhenat->setEmri($_POST['emri']);
        $tedhenat->setMbiemri($_POST['mbiemri']);
        $tedhenat->setEmaili($_POST['emaili']);
        $tedhenat->setPaswordi($_POST['paswordi']);
        $tedhenat->updateUserat($id);

        echo "<script>
        alert('Të dhënat janë përditësuar me sukses');
        document.location='displayDhenat.php';
    </script>";

    }

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/mysingUPstyle.css" />
    <title>Formulari i Përditësimit</title>
</head>
<body>
<div id="formulari">
    <h3>Modifiko te dhenat ne Formularin e Regjistrimit</h3>
    <form action="" method="POST">
        <label>Emri</label>
        <input type="text" class="inp" name="emri" value="<?php echo $record['emri']; ?>" />
        <label>Mbiemri</label>
        <input type="text" class="inp" name="mbiemri" value="<?php echo $record['mbiemri']; ?>" />
        <label>Emaili</label>
        <input type="email" class="inp" name="emaili" value="<?php echo $record['emaili']; ?>" />
        <label>Paswordi</label>
        <input type="password" class="inp" name="paswordi" value="<?php echo $record['paswordi']; ?>" />
        <button name="edit">RUAJ</button>
    </form>
</div>
</body>
</html>