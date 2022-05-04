
<div>
    <h1 id="titre1"> WikiPop </h1>
    <img id="BeauSuga" src="SUGA1-1.jpg">
</div>

<div id="ListeExterne">
    
    <ol style="list-style:none;">
    <?php
    if (isset($_SESSION['kpop'])){
        echo "<li><a href='index.php'> Accueil </a><br/><br/></li>";
        echo "<li><a href='ajouterartiste.php'> Ajout d'un artiste  </a><br/><br/></li>";
        echo "<li><a href='reference.php'> Les références du code  </a><br/><br/></li>";
    }
    else{
        echo "<li><a href='index.php'> Accueil </a><br/><br/></li>";
        echo "<li><a href='connection.php'> Connexion au compte </a><br/><br/></li>";
        echo "<li><a href='artiste.php'> Rechercher un artiste </a><br/><br/></li>";
    }
    ?>
    </ol>
</div>


