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


if (isset($_COOKIE['emri'])) {

    $emri = htmlspecialchars($_COOKIE['emri']);
    echo "<script>
    alert('Mire se vini, $emri');
</script>";
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    
    <div class="navbar">  
        <div class="h1"><h1>SRF AutoCenter </h1></div>
        <div class="links">
        <a href="AboutUs.html">About Us</a>
        <a href="News.html">News</a>
        <a href="produktet.php">Products</a>
        <a href="lexoVeturat.php">Cars</a>
        <a href="ContactUs.php">Contact-Us</a>
        <a href="logout.php" onclick="return confirm('A jeni i sigurt qe deshironi te dilni?');">LogOut</a>
    </div>
    </div>

   
    <div class="imazhi">
        <img src="rini/img/logo.png" class="container-imazhi">
    </div>
  
    <div class="footer">
        <p>Ne pjesen larte i keni linqet qe mund ti klikoni per te shkuar te faqet respektive.Faleminderit per besimin e vazhdueshem!</p>
    </div>

</div>
</body>
</html>