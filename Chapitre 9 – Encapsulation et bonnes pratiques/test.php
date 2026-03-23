

<?php



require 'ArticleEncapsule.php';


$article = new Article();
$article->setTitre("POO en PHP ");
$article->setcontenu("<p>Introduction à la programmation orientée objet.</p>");
echo $article->afficher();

?>