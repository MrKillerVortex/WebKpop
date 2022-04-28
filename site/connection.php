<?php
    include_once 'authentification/include.erreursF.php';
?>

<html>
    <?php
        include_once('ajoutdesheaders.php');
    ?>
    <body>
        <?php
            include_once ('ajoutduhtmlsurlespages.php');
        ?>

        <div id="FormConnexion">
            <h2 id="Titre3">Connexion au compte de WikiPop</h2>
            <form method="post" action="authentification/redirect.securite.php" name="donneesFonction" id="donneesFonction">
            <input type="hidden" name="token2" value="<?php echo $_SESSION['token2'] ?? '' ?>">
                <ul>
                    <li><label for="username">Nom d'utilisateur</label><input type="input" id="username" name="username" size="40" placeholder="Utilisateur"></li>
                    <li><label for="password">Mot de passe</label><input type="password" id="password" name="password" size="40" placeholder="Mot de passe"></li>
                </ul>
                
                <input class="boutonConnecter" type="submit" onclick="formDonnees.submit()" value=" Me connecter ">
           
                <a class="boutonInscrire" href="inscription.php" class="btn btn-primary">M'inscrire</a>
                <?php
                    if ( (isset($erreurs["username"]) && $erreurs["username"]===0) || (isset($erreurs["password"]) && $erreurs["password"]===0) ) 
                            echo "<span>La combinaison nom d'usager/mot de passe n'est pas valide.</span>";
                ?>
            </form>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#0077b6" fill-opacity="1" d="M0,224L30,192C60,160,120,96,180,69.3C240,43,300,53,360,96C420,139,480,213,540,218.7C600,224,660,160,720,154.7C780,149,840,203,900,234.7C960,267,1020,277,1080,250.7C1140,224,1200,160,1260,138.7C1320,117,1380,139,1410,149.3L1440,160L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
          </svg>
    </body>

</html>