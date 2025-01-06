<?php

require_once('regjistri.php');

$tedhenat = new SignupForma();

$id = $_GET['id'];
$record = $tedhenat->lexoSipasID($id);

if (isset($_POST['edit'])) {
    $tedhenat->setEmri($_POST['emri']);
    $tedhenat->setMbiemri($_POST['mbiemri']);
    $tedhenat->setEmaili($_POST['emaili']);
    $tedhenat->setPaswordi($_POST['paswordi']);
    $tedhenat->updateUserat($id);
    echo "<script>
        alert('Te dhenat jan perditesuar me sukses');
        document.location='leximiUserave.php';
    </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Users</title>
   <link rel="stylesheet" href="ndryshoUserin.css">
</head>
<body>
    <div id="formulari">
        <h3>Update the User's Data</h3>
        <form action="" method="post">
            <a href="leximiUserave.php" style="text-decoration: none;">
                <button id="back" type="button" onclick="window.location.href='leximiUserave.php';">BACK</button>
            </a>

            <label for="emri"></label>
            <input type="text" id="emri" name="emri" value="<?php echo $record['emri']; ?>" required>

            <label for="mbiemri">Last Name</label>
            <input type="text" id="mbiemri" name="mbiemri" value="<?php echo $record['mbiemri']; ?>" required>

            <label for="emaili">Email</label>
            <input type="email" id="emaili" name="emaili" value="<?php echo $record['emaili']; ?>" required>

            <label for="paswordi">Password</label>
            <input type="password" id="paswordi" name="paswordi" value="<?php echo $record['paswordi']; ?>" required>

            <button type="submit" name="edit">SAVE</button>
        </form>
    </div>
</body>
</html>
