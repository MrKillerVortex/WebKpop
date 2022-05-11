<?php
include_once('authentification/setsession.php');
$_SESSION = [];
session_unset();
session_destroy();
// Rediriger vers la page de connexion:
header('Location: ../connection.php');
?> 