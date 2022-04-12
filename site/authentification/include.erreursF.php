<?php
    $erreurs = array();

    if (isset($_COOKIE)) {
        foreach ($_COOKIE as $key => $value) {
            if ($value === "0") {
                $erreurs[$key] = 0;
                setcookie($key,"",0,"/");
            }
        }
    }
?>