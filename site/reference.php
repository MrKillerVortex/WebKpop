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
            include_once ('ajoutduhtmlsurlespages.php');
        ?>

        <div id="Main">
            <ol style="list-style:none;"> 
                <li><a href="https://getwaves.io/"> La vague dans le bas de la page en SVG </a><br/><br/></li>
                <li><a href="https://www.w3schools.com/html/html_lists.asp"> Listes </a><br/><br/></li>
                <li><a href="https://www.w3schools.com/html/html_forms.asp"> Le formulaire recherche et de connexion  </a><br/><br/></li>
                <li><a href="https://www.w3schools.com/tags/tag_img.asp"> Pour les images mis dans le site  </a><br/><br/></li>
                <li><a href="https://www.w3schools.com/cssref/sel_hover.asp"> La couleur au-dessus de la liste en sélection  </a><br/><br/></li>
                <li><a href="https://www.w3schools.com/html/html_tables.asp"> Faire une table </a><br/><br/></li>
                <li><a href="https://www.php.net/manual/fr/control-structures.for.php"> Faire une boucle for en php dans une table </a><br/><br/></li>
                <li><a href="https://www.php.net/manual/fr/session.security.ini.php"> Faire les initialisations et les paramètres de la session </a><br/><br/></li>
                <li><a>Package d’hébergement : 	packboy</a></li>
                <li><a>Nom du serveur : 	projetweb</a></li>
                <li><a>Version de cPanel : 	102.0 (build 11)</a></li>
                <li><a>Version Apache : 	2.4.53</a></li>
                <li><a>Version de PHP : 	7.3.33</a></li>
                <li><a>Version de MySQL : 	5.7.37</a></li>
                <li><a>Architecture : 	x86_64</a></li>
                <li><a>Système d’exploitation :     linux</a></li>
                <li><a>Adresse IP partagée : 	206.167.165.87</a></li>
                <li><a>Adresse IP locale : 	10.201.1.87</a></li>
                <li><a>Chemin vers Sendmail : 	/usr/sbin/sendmail</a></li>
                <li><a>Chemin vers Perl : 	/usr/bin/perl</a></li>
                <li><a>Version de Perl : 	5.16.3</a></li>
                <li><a>Version du noyau : 	3.10.0-1160.59.1.el7.x86_64</a></li>
                <li><a>Version HTML : 	5</a></li>
                <li><a>Version CSS : 	3</a></li>
            </ol>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#0077b6" fill-opacity="1" d="M0,224L30,192C60,160,120,96,180,69.3C240,43,300,53,360,96C420,139,480,213,540,218.7C600,224,660,160,720,154.7C780,149,840,203,900,234.7C960,267,1020,277,1080,250.7C1140,224,1200,160,1260,138.7C1320,117,1380,139,1410,149.3L1440,160L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
          </svg>
    </body>

</html>