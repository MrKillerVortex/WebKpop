<?php

require_once 'Connexion.abstract.php';

class ConnexionPDO extends Connexion {


    public function getConnexion() {
        try {
            require_once './config.pdo.php';
            $dsn = "mysql:dbname=".DATABASE.";host=".DOCKER_HOST.";charset=utf8;port=3306;";

            $this->connexion = new PDO($dsn, DOCKER_UTILISATEUR, DOCKER_MDP);
            return $this->connexion;
            
        } catch (Exception $e){
            error_log("Connexion PDO: ".$e->getMessage());
            header("Location: messageerreursBD.php?message=erreur inopiné: 10-10-710");
        }
    }
}