<?php
require_once 'abstract.connection.php';
require_once 'connection.pdo.php';

/**
 * Classe de récupération de la connexion sur une base de données.
 * @author Claude
 */
class ListeConnectionHTML extends ListeConnection {

    public function __construct()
    {
        $cd = new ConnexionPDO();
        $this->connexion = $cd->getConnexion();
    }

    /**
     * Fourni une liste en HTML dropdown.
     */
    public function getListe(){
        
        $this->selectToutes();

        $html = "<select name='fleurs'>";
        while($fleur = $this->liste->fetch(PDO::FETCH_OBJ)){
            $html .= "<option value='".$fleur->id."'>".$fleur->nom."</option>";
        }
        $html .= "</select>";

        return $html;
    }

    public function getNameById($id)
    {
        $this->selectByid($id);
        $fleur = $this->liste->fetchObject();

        $html  = "<p>";
        $html .= $fleur->nom;
        $html .= "</p>";

        return $html;
    }

}