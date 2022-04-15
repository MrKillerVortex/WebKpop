<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            //namespace demoPDO; // Namespace déclaré au haut du document

            include_once './connexion.classe.php';
            $liste = new ListeConnectionHTML();

            echo $liste->getListe();

            echo $liste->getNameById(2);

       ?>
    </body>
</html>