<?php
    ini_set("session.cookie_lifetime", 1800);
    ini_set("session.use_cookies", 1);
    ini_set("session.use_only_cookies" , 1);
    ini_set("session.use_strict_mode", 1);
    ini_set("session.cookie_httponly", 1);
    ini_set("session.cookie_secure", 0);//Pour docker local. Mettre à 1 en production quand on est rendu sur HTTPS avec la BD.
    ini_set("session.cookie_samesite" , "Strict");
    ini_set("session.trans_sid_hosts",$_SERVER['HTTP_HOST']);
    ini_set("session.referer_check",$_SERVER['HTTP_HOST']);
    ini_set("session.cache_limiter" , "nocache");
    ini_set("session.sid_length" , 48);
    ini_set("session.sid_bits_per_character" , 6);
    ini_set("session.hash_function" , "sha256");

    ini_set("session.gc_maxlifetime", 1800);
    ini_set("session.gc_probability",90);
    ini_set("session.gc_divisor",100);

    session_name("kpop");

    function validationAuthetif()
    {
        session_start();

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
        supprimerSession();
        session_start();
        $_SESSION['expiration']=time();
        $_SESSION['valide']="valide";
    }

    function supprimerSession()
    {
        session_start();
        session_gc();
        session_destroy();
        $_SESSION = array();
        session_commit();
    }
?>