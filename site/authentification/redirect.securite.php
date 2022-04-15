<?php

    $username = "shawn";
    $password = password_hash("unmotdepasse", PASSWORD_DEFAULT);
    $donneesAuthetificationOk = true;

    if (!empty($_POST['user']) && $_POST['user'] === $username){
        $user = filter_input(INPUT_GET, "user",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    } else {
        setcookie('user',"0", time()+30,"/");
        $donneesAuthetificationOk = false;
    }
    
    if (!empty($_POST['mdp']) && password_verify($_POST['mdp'],$password)){
        $_SESSION['mdp'] = filter_input(INPUT_GET, "mdp",FILTER_SANITIZE_SPECIAL_CHARS);
    } else {
        setcookie('mdp',"0", time()+30,"/");
        $donneesAuthetificationOk = false;
    }

    if ($donneesAuthetificationOk == true) {
        include_once 'session.include.php';
        creationAuthentif();
        header("Location: ../connexioneffectue.php"); //Continue
    }
    else {
        header("Location: ../connection.php"); //Recommencer
    }
?>