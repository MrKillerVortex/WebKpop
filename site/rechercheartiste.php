<html>
    <head>
        <meta charset="utf-8">
        <title>Une page qui confirme l'ajout d'un artiste</title>
        <link href="kpop.css" rel="stylesheet">
    </head>
    <body>
        <?php
            include_once ('ajoutduhtmlsurlespages.html');
        ?>

        <h2 id="TitreRecherche">Artiste venant de la liste de recherche</h2>
            <table id="Table1">
                <tr>
                    <th>Artistes demandés</th>
                </tr>
        <?php

            for ($i=0; $i < 10; $i++) { 
                echo "<tr>";
                echo "<td> Artiste ".($i+1)."</td>";
                echo "</tr>";
            }
        ?>
            </table>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#0077b6" fill-opacity="1" d="M0,224L30,192C60,160,120,96,180,69.3C240,43,300,53,360,96C420,139,480,213,540,218.7C600,224,660,160,720,154.7C780,149,840,203,900,234.7C960,267,1020,277,1080,250.7C1140,224,1200,160,1260,138.7C1320,117,1380,139,1410,149.3L1440,160L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
          </svg>
    </body>

</html>