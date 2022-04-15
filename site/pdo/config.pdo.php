<?php
//Connexion à la BD

define("DOCKER_UTILISATEUR","fortinte_admin");
define("DOCKER_MDP","Merlinismycat0192");
define("DOCKER_HOST","mariadb");
define("HOST","localhost");
define("DATABASE","fortinte_kpop");

/* Essai à la connection sur la BD */
$link = mysqli_connect(HOST, DOCKER_UTILISATEUR, DOCKER_MDP, DATABASE);
 
// Checker la connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}