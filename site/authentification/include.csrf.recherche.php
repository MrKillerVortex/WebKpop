<?php

$token4 = htmlspecialchars($_POST["token4"]);

if (!$token4 || $token4 !== $_SESSION['token4']) {
    // return 405 http status code
    header($_SERVER['SERVER_PROTOCOL'] . ' 405 Method Not Allowed');
    exit;
} else {
    header("Location: ../index.php"); //Continue
}