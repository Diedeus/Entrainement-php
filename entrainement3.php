<?php

class user{
    public $nom ="hugo";
    public $prenom = "bocquet";

    public function parler(){
        return "bonjour";
    }
}

$userCreate = new user;

$userCreate->parler();
echo "et ".$userCreate->parler();