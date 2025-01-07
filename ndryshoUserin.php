<?php
require_once('regjistri.php');

$tedhenat = new SignupForma();

$id = $_GET['id'];
$record = $tedhenat->lexoSipasID($id);

if (isset($_POST['edit'])) {

    $emri = htmlspecialchars(trim($_POST['emri']));
    $mbiemri = htmlspecialchars(trim($_POST['mbiemri']));
    $emaili = filter_var(trim($_POST['emaili']), FILTER_SANITIZE_EMAIL);
    $paswordi = htmlspecialchars(trim($_POST['paswordi']));

   
    if (empty($emri) || empty($mbiemri) || empty($emaili) || empty($paswordi)) {
        echo "<script>alert('Te gjitha fushat duhet te plotesohen!');</script>";
    } elseif (!filter_var($emaili, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Emaili nuk eshte valid!');</script>";
    } elseif (strlen($paswordi) < 6) {
        echo "<script>alert('Paswordi duhet te jete te pakten 6 karaktere!');</script>";
    } else {
        
        $tedhenat->setEmri($emri);
        $tedhenat->setMbiemri($mbiemri);
        $tedhenat->setEmaili($emaili);
        $tedhenat->setPaswordi($paswordi);
        $tedhenat->updateUserat($id);
        echo "<script>
            alert('Te dhenat jan perditesuar me sukses!');
            document.location='leximiUserave.php';
        </script>";
    }
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
        <form action="" method="post" id="formaNdryshimitTeUserit">
            <a href="leximiUserave.php" style="text-decoration: none;">
                <button id="back" type="button" onclick="window.location.href='leximiUserave.php';">BACK</button>
            </a>

            <label for="emri">First Name</label>
            <input type="text" id="emri" name="emri" value="<?php echo $record['emri']; ?>">

            <label for="mbiemri">Last Name</label>
            <input type="text" id="mbiemri" name="mbiemri" value="<?php echo $record['mbiemri']; ?>">

            <label for="emaili">Email</label>
            <input type="email" id="emaili" name="emaili" value="<?php echo $record['emaili']; ?>" >
            <label for="paswordi">Password</label>
            <input type="password" id="paswordi" name="paswordi" value="<?php echo $record['paswordi']; ?>" >

            <button type="submit" name="edit">SAVE</button>
        </form>
    </div>
    <script defer src="prodValidate.js"></script>
</body>
</html>
