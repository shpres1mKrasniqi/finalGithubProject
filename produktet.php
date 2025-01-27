<?php

    require_once('addProducts.php');

    $tedhenat = new AddProducts();

    $allTeDhenat = $tedhenat->shfaqProduktet();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="products.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0">
</head>
<body>

  
<header>

    <nav>
        <div class="logo">
         <h1>SRF AutoCenter</h1>
        </div>
         <ul id="listaemenus">
             <li><a href="aboutUs.html">About Us</a></li>
             <li><a href="index.php">Home</a></li>
             <li><a href="ContactUs.php">Contact Us</a></li>

         </ul>
         <div class="menuIcon">

             <i class="fa-solid fa-bars" onclick="menu()"></i>
         </div>
     </nav>

<script src="https://kit.fontawesome.com/f8e1a90484.js" crossorigin="anonymous"></script>
</header>
<div class="containeri">
    <div class="slider">
        <button id="prev-slide" class="slide-button material-symbols-rounded">chevron_left</button>
        <div class="image">
            <img src="fotot/picsartLamb.jpg" alt="" class="foto">
            <img src="fotot/picsFerr.jpg" alt="" class="foto">
            <img src="fotot/PicsMercedesi.jpg" alt="" class="foto">
            <img src="fotot/PicsBugi.jpg" alt="" class="foto">
            <img src="fotot/LogoAuditWeb_Photo_Editor.jpg" alt="" class="foto">
            <img src="fotot/PicsartMasserati.jpg" alt="" class="foto">
            <img src="fotot/piscartPorsche.jpg" alt="" class="foto">
            <img src="fotot/BMWUntitled Project.jpg" alt="" class="foto">
            <img src="fotot/redTeslaPicsart.jpg" alt="" class="foto">
            <img src="fotot/picsLandRover.jpg" alt="" class="foto">
            <img src="fotot/koenigPicsarti.jpg" alt="" class="foto">
            <img src="fotot/MClPics.jpg" alt="" class="foto">
        </div>
        <button id="next-slide" class="slide-button material-symbols-rounded">chevron_right</button>
    </div>
</div>
<main>
    <div class="produktet">
        <?php foreach($allTeDhenat as $value): ?>
            <div class="permbajtja">
               <img src="./fotot/<?php echo $value['foto']; ?>">
        <h3><?php echo $value['modeli']; ?></h3>
        <p><?php echo $value['pershkrimi']; ?></p>
        <h6><?php echo $value['cmimi']; ?></h6>
        <p>Shtuar nga admin: <?php echo $value['shtuar_nga']; ?></p>
        <p>Modifikuar nga admin: <?php echo $value ['modifikuar_nga']?></p>   
        <button class="view-audiA5" onclick="window.location.href='Details.html'">VIEW DETAILS</button>
        <form action="buy.php" method="get">
            <input type="hidden" name="id" value="<?php echo $value['id'];?>">
        <button class="buy" onclick="window.location.href='buy.php'">BUY</button>
        </form>
        
        
</a>

        
            </div>
        <?php endforeach; ?>
    </div>
</main>
<footer>
  <div class="container">
    <div class="row">
        <div class="col" id="rrethCompanis">
            <img src="fotot/logoeKompanise.png" alt="logojaeKompanise" class="logoCompanis">
            <p>SRF Autocenter, the largest car dealership in Kosovo and the Balkans.
                Founded by Shpresim Krasniqi (Founder), led by Rinor Halitaj(CEO), 
                and supported by Florent Brahaj(COO-Chief Operating Officer).
            </p>
            <div class="socialnet">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-snapchat"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
        <div class="col" id="sherbimet">
            <h3>Services</h3>
            <div class="link">
            <a href="#">Online Sales</a>
            <a href="#">Car leasing</a>
            <a href="#">Trade-In</a>
            <a href="#">Vehicle Maintenance</a>
        </div>
    </div>
        <div class="col" id="linqet">
            <h3>Links</h3>
            <div class="link">
                <a href="aboutUs.html">About Us</a>
                <a href="Home.html">Home</a>
                <a href="Details.html">Details</a>
                
            </div>
        </div>
    </div>
  </div>
</footer>
<script defer src="validimi.js"></script>
</body>
</html>