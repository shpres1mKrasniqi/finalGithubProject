<?php
session_start();

if (!isset($_SESSION['admin_id'])) {
    header('Location: loginiAdmin.php'); 
    exit();
}

require_once('MenaxhoVeturat.php');
$menaxhoVeturat = new MenaxhoVeturat();
$allCars = $menaxhoVeturat->shfaqVeturat();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Cars</title>
    <link rel="stylesheet" href="News.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<header>
    <nav>
        <div class="logo">
            <h1>SRF AutoCenter - Veturat Management</h1>
        </div>
        <ul id="menu">
            <li><a href="adminProducts.php">Products</a></li>
            <li><a href="shtoLajme.php">Add News</a></li>
            <li><a href="shtoVetura.php">Add Cars</a>
        </ul>
    </nav>
</header>

<main>
    <h2>News List</h2>
    <div class="news-container">
        <?php foreach ($allCars as $cars): ?>
            <div class="news-item">
                <img src="./fotot/<?php echo $cars['foto']; ?>" alt="News Image">
                <h3><?php echo $cars['titulli']; ?></h3>
                <p><?php echo $cars['pershkrimi']; ?></p>
                <p>Added by admin: <?php echo $cars['shtuar_nga']; ?></p>
                <p>Modified by admin: <?php echo $cars['modifikuar_nga']; ?></p>
                <a href="deleteVeturat.php?id=<?php echo $cars['id']; ?>" onclick="return confirm('Are you sure you want to delete this car?');">
                    <button class="btn-delete">DELETE</button>
                </a>
                <a href="editVeturat.php?id=<?php echo $cars['id']; ?>">
                    <button class="btn-edit">EDIT</button>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</main>


</body>
</html>
