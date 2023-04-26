<?php

class voiture{                                          //! creation de la class voiture et de ses objets
    public $couleur = "red";
    public $marque = "Audi";
    public $model = "R8";
}
$voitureEnCours = new voiture;

echo "la marque est: $voitureEnCours->marque ";
$voitureEnCours->couleur = "noire";                     //! changement de valeur d'un des objets de la class voiture
echo "la marque est $voitureEnCours->couleur";
echo "la marque est $voitureEnCours->marque $voitureEnCours->couleur";
$nbrRoue = "";
$voitureEnCours->nbrRoue = "4";
echo "le nombre de roue est de $voitureEnCours->nbrRoue";