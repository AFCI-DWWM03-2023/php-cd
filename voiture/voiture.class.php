<?php


class Voiture{
private $marque;
private $modele;
private $année;
private $Couleur;
private $Vitesse ;

public function __construct($marque,$modele,$année,$Couleur,$Vitesse = 0)

{
    $this->marque = $marque;
    $this->modele = $modele;
    $this->année = $année;
    $this->Couleur = $Couleur;
    $this->Vitesse = $Vitesse;
}

public function afficherinfos(){
echo "marque : {$this->marque},modele :{$this->modele}année:{$this->année}Couleur:{$this->Couleur}Vitesse:{$this->Vitesse}";

}

}