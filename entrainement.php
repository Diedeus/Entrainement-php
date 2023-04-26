<?php
echo 'bonjour';
print 'Nous sommes vendredi et il fait beau';
$nomPersonne = "toto";              //! création variable
echo "bonjour $nomPersonne";        //! ça marche
echo 'bonjour '.$nomPersonne;       //! ça marche

$tab = [];                          //! création d'un tableau vide
$tab = array("toto","tata");        //! mettre des trucs dans le tableau
print_r($tab[0]);                   //! afficher qqchose du tableau
var_dump($tab);


//! affichage de balise html et texte gràce à la méthode "écho"


echo '<h1>Bonjour</h1>';
echo PHP_EOL;
echo 'Nous sommes <strong>vendredi</strong> et il fait beau!<br>';
echo PHP_EOL;
echo '<div class="mazone">
je crée une zone html dans du php
</div>';
echo PHP_EOL;
//!

$votreNom =" ";
echo PHP_EOL;
$votreNom = readline("entrez votre nom: ");
echo PHP_EOL;
echo "bonjour $votreNom";

$tab2 = [];
$tab2 = array("$votreNom");
echo PHP_EOL;                   //! Pour passer à la ligne 

print_r($tab2);

$tabObjects =[];




?> 