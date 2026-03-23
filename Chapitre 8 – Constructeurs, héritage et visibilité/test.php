<?php

require 'BlogArticle.php';


$article1 = new BlogArticle("PDO en PHP", "Découvrir l'héritage.", "Oussama");
$article2 = new BlogArticle("PDO en JS", "Découvrir l'héritage.", "anas");
$article3 = new BlogArticle("PDO en CSS", "Découvrir l'héritage.", "hasan");
$article4 = new BlogArticle("PDO en HTML", "Découvrir l'héritage.", "mohamed");
$article5 = new BlogArticle("PDO en FIGMA", "Découvrir l'héritage.", "yasin");
$article6 = new BlogArticle("PDO en FIGMA", "Découvrir l'héritage.", "yasin");



echo  $article1->afficher() . "<br>";
echo  $article2->afficher() . "<br>";
echo  $article3->afficher() . "<br>";
echo  $article4->afficher() . "<br>";
echo  $article5->afficher() . "<br>";
echo  $article6->afficher() . "<br>";
