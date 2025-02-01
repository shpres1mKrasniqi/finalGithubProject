<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['admin_id'])) {
    header('Location: loginiAdmin.php');
    exit();
}
require_once('Blejvetur.php');
$teDhenat = new Blejvetur();
$krejtteDhenat = $teDhenat->lexoBlerjet();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blerjet</title>
    <link rel="stylesheet" href="leximi.css">
</head>
<body>

<div class="kontinieri" id="kontinieri" style="overflow-x:auto;">
    <table>
    <a href="produktet.php">

<button id="bak">BACK</button>
        <tr>
            <th>Emri i Bleresit</th>
            <th>Mbiemri</th>
            <th>Data</th>
        </tr>

        <?php

        foreach($krejtteDhenat as $key=>$value) {
        ?>
        <tr>
            <td><?php echo $value['emri']; ?></td>
            <td><?php echo $value['mbiemri']; ?></td>
            <td><?php echo $value['data_blerjes']; ?></td>
        </tr>
        <?php
        }
        ?>
    </table>
</div>

</body>
</html>