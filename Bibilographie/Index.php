<?php

require "Livre.php";
require "Auteur.php";

// Auteur
$auteur1 = new Auteur("Stephen", "KING");
// Livre
$livre1 = new Livre("Ça", 1986, 1138, 20.00, $auteur1);
$livre2 = new Livre("Simetierre", 1983, 374, 15.00, $auteur1);
$livre3 = new Livre("Le Fléau", 1978, 823, 14.00, $auteur1);
$livre4 = new Livre("Shining", 1977, 447, 16.00, $auteur1);

echo "Livres de ".$auteur1."<br><br>";

$auteur1 -> displayBibliographie();