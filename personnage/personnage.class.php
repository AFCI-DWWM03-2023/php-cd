<?php

class Personnel{
public $nom;
public $prenom;

public function __construct($name,$prenom)
{
    $this->nom = $name;
    $this->prenom = $prenom;
}

public function afficherinfos(){
echo "Nom : {$this->nom},prenom :{$this->prenom}";

}

}