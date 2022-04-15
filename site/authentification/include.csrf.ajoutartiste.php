<?php

$token = htmlspecialchars($_POST["token"]);

if (!$token || $token !== $_SESSION['token']) {
    // return 405 http status code
    header($_SERVER['SERVER_PROTOCOL'] . ' 405 Method Not Allowed');
    exit;
} else {
    header("Location: ../ajouterartiste.php"); //Continue
}