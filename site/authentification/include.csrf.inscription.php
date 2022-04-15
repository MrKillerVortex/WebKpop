<?php

$token3 = htmlspecialchars($_POST["token3"]);

if (!$token3 || $token3 !== $_SESSION['token3']) {
    // return 405 http status code
    header($_SERVER['SERVER_PROTOCOL'] . ' 405 Method Not Allowed');
    exit;
} else {
    header("Location: ../inscription.php"); //Continue
}