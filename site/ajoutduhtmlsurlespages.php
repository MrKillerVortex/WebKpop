<?php

include_once 'authentification/session.include.php';
?>
<div>
    <h1 id="titre1"> WikiPop </h1>
    <script src="recherche/Recherche.js"></script>
    <script src="recherche/main.js"></script>
    <img id="BeauSuga" src="SUGA1-1.jpg">
</div>

<div id="ListeExterne">
    <ol style="list-style:none;">
        <li><a href='index.php'> Accueil </a><br/><br/></li>
        <?php
        if (!validationAuthetif()) {
            echo '<li><a href="connection.php"> Connexion au compte </a><br/><br/></li>';
        }
        ?>
        <li><a href='artiste.php'> Rechercher un artiste </a><br/><br/></li>
        <li><a href='ajouterartiste.php'> Ajout d'un artiste  </a><br/><br/></li>
        <li><a href='reference.php'> Les références du code  </a><br/><br/></li>
        <?php
        if (validationAuthetif()) {
            echo '<li><a href="authentification/deconnection.php"> Déconnexion </a><br/><br/></li>';
        }
        ?>
    </ol>
</div>


