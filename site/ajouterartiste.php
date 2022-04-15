<?php
    include_once 'authentification/session.include.php';

    if (!validationAuthetif()) {
        header("Location: ../connection.php");
    }
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Un Wiki de certains artistes de K-POP</title>
        <link href="kpop.css" rel="stylesheet">
    </head>
    <body>
        <?php
            include_once ('ajoutduhtmlsurlespages.html');
        ?>

        <div id="MainAjout">
            <h2>Ajout d'un artiste de K-Pop</h2>
                <form method="get" action="ajoutartiste.php">
                <input type="hidden" name="token" value="<?php echo $_SESSION['token'] ?? '' ?>">
                    <ul>
                        <li><label for="nom">Nom</label><input type="input" id="nom" name="nom" size="40" placeholder="Le nom de l'artiste"></li>
                        <li><label for="groupe">Groupe</label><input type="text" id="groupe" name="groupe" size="40" placeholder="Le groupe dans le/laquelle joue l'artiste"></li>
                        <li><label for="ville-origine">Ville</label><input type="text" id="ville-origine" name="ville-origine" size="40" placeholder="La ville d'origine de l'artiste"></li>
                        <li><label for="date-naissance">Date naissance</label><input type="date" id="date" name="date" size="40" placeholder="La date de naissance de l'artiste"></li>
                        
                    </ul>
                    <input class="boutonArtiste" type="submit" value=" Ajouter l'artiste ">
                </form>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#0077b6" fill-opacity="1" d="M0,224L30,192C60,160,120,96,180,69.3C240,43,300,53,360,96C420,139,480,213,540,218.7C600,224,660,160,720,154.7C780,149,840,203,900,234.7C960,267,1020,277,1080,250.7C1140,224,1200,160,1260,138.7C1320,117,1380,139,1410,149.3L1440,160L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
          </svg>
    </body>

</html>