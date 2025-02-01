<?php

require_once('MenaxhoVeturat.php');
<<<<<<< HEAD
$newsManager = new MenaxhoVeturat();
$allNews = $newsManager->shfaqVeturat();
=======
$menaxhoVeturat = new MenaxhoVeturat();
$allCars = $menaxhoVeturat->shfaqVeturat();
>>>>>>> 4085cec11b7414cd043510534f66c709a06fa274
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Admin News</title>
    <link rel="stylesheet" href="News.css">
=======
    <title>Admin Cars</title>
    <link rel="stylesheet" href="LexoVeturat.css">
>>>>>>> 4085cec11b7414cd043510534f66c709a06fa274
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
<<<<<<< HEAD
            <li><a href="shtoVetura.php">Add News</a></li>
=======
            <li><a href="shtoLajme.php">Add News</a></li>
            <li><a href="shtoVetura.php">Add Cars</a></li>
>>>>>>> 4085cec11b7414cd043510534f66c709a06fa274
        </ul>
    </nav>
</header>

<main>
<<<<<<< HEAD
    <h2>News List</h2>
    <div class="news-container">
        <?php foreach ($allNews as $news): ?>
            <div class="news-item">
                <img src="./fotot/<?php echo $news['foto']; ?>" alt="News Image">
                <h3><?php echo $news['titulli']; ?></h3>
                <p><?php echo $news['pershkrimi']; ?></p>
                <p>Added by admin: <?php echo $news['shtuar_nga']; ?></p>
                <p>Modified by admin: <?php echo $news['modifikuar_nga']; ?></p>
=======
    <h2>Cars List</h2>
    <div class="news-container">
        <?php foreach ($allCars as $cars): ?>
            <div class="news-item">
                <img src="./fotot/<?php echo $cars['foto']; ?>" alt="News Image">
                <h3><?php echo $cars['titulli']; ?></h3>
                <p><?php echo $cars['pershkrimi']; ?></p>
                <p>Added by admin: <?php echo $cars['shtuar_nga']; ?></p>
                <p>Modified by admin: <?php echo $cars['modifikuar_nga']; ?></p>
>>>>>>> 4085cec11b7414cd043510534f66c709a06fa274
            </div>
        <?php endforeach; ?>
    </div>
</main>

<footer>
  
</footer>

</body>
</html>
