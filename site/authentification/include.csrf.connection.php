<?php

$token2 = htmlspecialchars($_POST["token2"]);

if (!$token2 || $token2 !== $_SESSION['token2']) {
    // return 405 http status code
    header($_SERVER['SERVER_PROTOCOL'] . ' 405 Method Not Allowed');
    exit;
} else {
    header("Location: ../connection.php"); //Continue
}