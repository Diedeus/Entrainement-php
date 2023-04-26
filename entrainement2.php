<?php

class voiture{
    public $couleur = "red";
    public $marque = "Audi";
    public $model = "R8";
}
$voitureEnCours = new voiture;

echo "la marque est: $voitureEnCours->marque ";