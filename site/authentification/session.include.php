<?php

    function validationAuthetif()
    {

        if (!empty($_SESSION['valide']) && $_SESSION['valide'] == "valide") {
            session_regenerate_id(false);
            $_SESSION['expiration'] = time();
            $_SESSION['valide'] = "valide";

            return true;
        }
        else {

            supprimerSession();
            return false;
        }
    }

    function creationAuthentif()
    {
        $_SESSION['expiration']=time();
        $_SESSION['valide']="valide";
        //ajoute le token pour le CSRF
        $_SESSION['token'] = md5(uniqid(mt_rand(), true));
    }

    function supprimerSession()
    {
        session_gc();
        session_destroy();
        $_SESSION = array();
        session_commit();
    }

    /*
    HASH_MAC CSRF
    */
?>