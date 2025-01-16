<?php

    require_once('regjistri.php');

    $teDhenat = new SignupForma();

    $krejtteDhenat = $teDhenat->lexoTeDhenat();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="leximi.css">
</head>
<body>
    

<div class="kontinieri" id="kontinieri" style="overflow-x:auto;">

    <table>
         <a href="adminLogin.php">

<button id="bak">BACK</button>

</a>
        <tr>
        <th>FirstName</th>
        <th>LastName</th>
        <th>Email</th>
        <th>Actions</th>
        </tr>

        <?php

    foreach($krejtteDhenat as $key=>$value){
?>

    <tr>
        <td><?php echo $value['emri'];?></td>
        <td><?php echo $value['mbiemri'];?></td>
        <td><?php echo $value['emaili'];?></td>
        <td id="de">

        <a href="delete.php?id=<?php echo $value['id'];?>" onclick="return confirm('A jeni i sigurt qe deshironi te fshini kete produkt?');">

        <button id="d">DELETE</button>

        </a>

        <a href="ndryshoUserin.php?id=<?php echo $value['id'];?>">

            <button id="edit">EDIT</button>

        </a>
        </td>
    </tr>

<?php
    }
    ?>
    </table>
</div>

</body>
</html>