<?php

class Article {
    public $titre;

    public $contenu;


    public function afficher() {
        return "Titre : " . $this->titre . " - Contenu : " . $this->contenu;
    }

}

    class commontaire {

    private $contenu;
    public $auteur;
    public $date_publish;
    public $article;

    public function afficher() {
        return "Contenu : " . $this->contenu . "Auter : " . $this->auteur . "Date_publish : " . $this->date_publish . " <br> Article : " . $this->article->afficher();
    }

    }


$article1 = new Article();
$article1->titre = "Introduction à PHP <br>";
$article1->contenu = "PHP est un langage de script côté serveur. <br>";



echo $article1->afficher();



$article2 = new Article();
$article2->titre = "Programmation orientée objet <br>";
$article2->contenu = "La POO facilite la modularité et la maintenance.";


echo "<br>" . $article2->afficher();


$comment1 = new commontaire();


$comment1->contenu = "La POO facilite la modularité et la maintenance.";
$comment1->auteur = "oussama";
$comment1->date_publish = " 2026/02/22";
$comment1->article = $article2;

echo $comment1->afficher();



?>




<?php

// class Article {
//     public $titre;
//     public $contenu;

//     public function afficher() {
//         return "Titre : " . $this->titre . " - Contenu : " . $this->contenu;
//     }
// }

// $article1 = new Article("Introduction à PHP", "PHP est un langage de script côté serveur.");
// echo $article1->afficher()."<br>";
// $article2 = new Article("Programmation orientée objet", "La POO facilite la modularité et la maintenance.");
// echo $article2->afficher()."<br>";

?>