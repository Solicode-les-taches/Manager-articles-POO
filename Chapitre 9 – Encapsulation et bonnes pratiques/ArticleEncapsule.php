<?php


class Article {
    private $titre;
    private $contenu;


    public function setTitre($titre) {
        if (!empty($titre) && strlen($titre) > 5) {
            $this->titre = $titre;
        }else {
            echo "Titre invalide.";
        }
    }




    public function getTitre() {
        return $this->titre;
    }


    public function setcontenu($contenu) {
        $this->contenu = htmlspecialchars($contenu);
    }

    public function getContenu() {
        return $this->contenu;
    }



    public function afficher() {
        return "Titre : {$this->titre} <br> Contenu : {$this->contenu}";
    }
}


