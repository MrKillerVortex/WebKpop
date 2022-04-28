<?php
    require('pdo/config.pdo.php');


    // Check the database for duplicate username
    $username_check_query = "SELECT * FROM utilisateur WHERE username='$username' LIMIT 1";
    $result = mysqli_query($link, $username_check_query);
    $username_from_db = mysqli_fetch_assoc($result);

    if ($username_from_db) { // if user 
        if ($username_from_db['username'] === $username) {
            echo "Utilisateur existe déjà"; die();
        }
    }

    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($link, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($link, $password);
        $query    = "INSERT into `utilisateur` (username, password)
                        VALUES ('$username', '" . hash('sha256', $password) . "')";
        $result   = mysqli_query($link, $query);
        if ($result) {
            header('Location: ../site/inscriptioneffectue.php');
            exit();
        } else {
            header('Location: ../site/inscription.php');
            exit();
        }
    } else {
    }
?>