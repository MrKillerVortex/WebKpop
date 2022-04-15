<html>
    <head>
        <meta charset="utf-8">
        <title>Une page d'inscription pour le site</title>
        <link href="kpop.css" rel="stylesheet">
    </head>
    <body>
        <?php
            include_once ('ajoutduhtmlsurlespages.html');
        ?>

        <div id="FormConnexion">
            <h2 id="Titre3">Connexion au compte de WikiPop</h2>
            <form method="get" action="connexioneffectue.php">
            <input type="hidden" name="token3" value="<?php echo $_SESSION['token3'] ?? '' ?>">
                <ul>
                    <li><label for="non">Nom d'utilisateur</label><input type="input" id="nom" name="nom" size="40" placeholder="Nom"></li>
                    <li><label for="mdp">Mot de passe</label><input type="password" id="mdp" name="mdp" size="40" placeholder="Mot de passe"></li>
                    <li><label for="mdp2">Resaisir</label><input type="password" id="mdp2" name="mdp2" size="40" placeholder="Entrez votre mot de passe à nouveau"></li>
                </ul>
                <input class="boutonCréation" type="submit" formaction="inscriptioneffectue.php" value=" M'inscrire ">
            </form>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#0077b6" fill-opacity="1" d="M0,224L30,192C60,160,120,96,180,69.3C240,43,300,53,360,96C420,139,480,213,540,218.7C600,224,660,160,720,154.7C780,149,840,203,900,234.7C960,267,1020,277,1080,250.7C1140,224,1200,160,1260,138.7C1320,117,1380,139,1410,149.3L1440,160L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
          </svg>
    </body>

</html>