<?php

session_start();


$_SESSION = array();


if (isset($_COOKIE['emri'])) {
    setcookie('emri', '', time() - 3600, '/');
}


if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}


session_destroy();


header("Cache-Control: no-cache, no-store, must-revalidate"); 
header("Pragma: no-cache"); 
header("Expires: 0");


header("Location: login.php");
exit();
?>