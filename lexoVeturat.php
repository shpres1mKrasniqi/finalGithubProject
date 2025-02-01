<?php
session_start();


if (!isset($_SESSION['emri'])) {
    header("Location: login.php");
    exit();
}

header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");
require_once('regjistri.php');
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
    <link rel="stylesheet" href="LexoVeturat.css">
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
            <li><a href="ContactUs.php">Contact Us</a></li>
            <li><a href="about.php">About Us</a></li>
        </ul>
    </nav>
</header>

<main>
    <h2>Cars List</h2>
    <div class="news-container">
        <?php foreach ($allCars as $cars): ?>
            <div class="news-item">
                <img src="./fotot/<?php echo $cars['foto']; ?>" alt="News Image">
                <h3><?php echo $cars['titulli']; ?></h3>
                <p><?php echo $cars['pershkrimi']; ?></p>
                <p>Added by admin: <?php echo $cars['shtuar_nga']; ?></p>
                <p>Modified by admin: <?php echo $cars['modifikuar_nga']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</main>

<footer>
  
</footer>

</body>
</html>
