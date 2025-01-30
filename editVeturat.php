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
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: navy;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

#formulari {
    background-color: #00CCFF;
    padding: 20px 30px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 400px;
}

h3 {
    text-align: center;
    color: #333;
    margin-bottom: 20px;
}

form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

label {
    font-size: 14px;
    font-weight: bold;
    color: #555;
}

input[type="text"],
textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #00CCFF;
    border-radius: 5px;
    font-size: 14px;
    color: #333;
    outline: none;
    transition: border-color 0.3s ease;
}

input[type="text"]:focus,
textarea:focus {
    border-color: #007bff;
}

textarea {
    resize: none;
}

button {
    padding: 10px 15px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    font-size: 14px;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #0056b3;
}

#back {
    background-color: #007bff;
    color: #fff;
    margin-bottom: 10px;
}

#back:hover {
    background-color:#0056b3;
}

    </style>
</body>
</html>
