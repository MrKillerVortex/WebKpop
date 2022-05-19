<?php
    require('config.pdo.php');


    // Check the database for duplicate username
    $stmt = $link->prepare('CALL DoubleUtilisateur(?);');
    $stmt->bind_param('s', $username);
    $result = mysqli_query($link, $username_check_query);
    $username_from_db = mysqli_fetch_assoc($result);

    if ($username_from_db) { // if user 
        if ($username_from_db['username'] === $username) {
            error_log("L'utilisateur est déjà utilisé"); die();
        }
    }

    if (isset($_REQUEST['username'])) {
        
        $stmt = $link->prepare('CALL InsertUtilisateur(?,?);');
        $stmt->bind_param('ss', $username, $password);

        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($link, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = hash('sha256',$password);
        $password = mysqli_real_escape_string($link, $password);

	    $stmt->execute();
	    $result = $stmt->store_result();

        if ($result) {
            header('Location: ../inscriptioneffectue.php');
            exit();
        } else {
            header('Location: ../inscription.php');
            exit();
        }
    } else {
    }
?>