<?php
    include_once('../pdo/config.pdo.php');
    include_once 'session.include.php';
    $donneesAuthetificationOk = true;


    if ($stmt = $link->prepare('SELECT idutilisateur, password FROM utilisateur WHERE username = ?')) {

	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();

	$stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();

        if (hash('sha256', $_POST['password']) == $password) {
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            creationAuthentif();
            $log = "Username: ".$username." - ".date("F j, Y, g:i a")." - Attempt: AUTHENTIFICATION EFFECTUÉ\n";
            file_put_contents('./log_auth.log', $log, FILE_APPEND);
            header("Location: ../connexioneffectue.php");
        } else {
            // Incorrect password
            echo 'Incorrect username and/or password!'.$password.' '.hash('sha256', $_POST['password']);
            setcookie('mdp',"0", time()+30,"/");
            $donneesAuthetificationOk = false;
            $log = "Username: ".$username." - ".date("F j, Y, g:i a")." - Attempt: MOT DE PASSE INCORRECT/OU UTILISATEUR\n";
            file_put_contents('./log_auth.log', $log, FILE_APPEND);
            header("Location: ../connection.php");
        }
    } else {
        // Incorrect username
        echo 'Incorrect username and/or password!';
        setcookie('user',"0", time()+30,"/");
        $donneesAuthetificationOk = false;
        $log = "Username: ".$username." - ".date("F j, Y, g:i a")." - Attempt: MOT DE PASSE INCORRECT/OU UTILISATEUR\n";
        file_put_contents('./log_auth.log', $log, FILE_APPEND);
        header("Location: ../connection.php");
    }

	$stmt->close();
    }
?>