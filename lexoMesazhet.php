<?php
session_start();

if (!isset($_SESSION['admin_id'])) {
    header('Location: loginiAdmin.php');
    exit();
}
require_once('contactphp.php');
$teDhenat = new ContactUsPHP();
$krejtteDhenat = $teDhenat->lexoMesazhe();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesazhet e Perdoruesve</title>
    <link rel="stylesheet" href="leximi.css">
</head>
<body>

<div class="kontinieri" id="kontinieri" style="overflow-x:auto;">
    <table>
    <a href="ContactUs.php">

<button id="bak">BACK</button>
        <tr>
            <th>Emri dhe Mbiemri</th>
            <th>Email-i</th>
            <th>Mesazhi</th>
            <th>Data dhe Koha</th>
        </tr>

        <?php

        foreach($krejtteDhenat as $key=>$value) {
        ?>
        <tr>
            <td><?php echo $value['emridheMbiemri']; ?></td>
            <td><?php echo $value['email']; ?></td>
            <td><?php echo $value['mesazhi']; ?></td>
            <td><?php echo $value['data_koha']; ?></td>
        </tr>
        <?php
        }
        ?>
    </table>
</div>

</body>
</html>