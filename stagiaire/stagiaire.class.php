<?php


class stagiaire{

    public function __construct(public string $nom,public array $notes )
{

}

public function calculerMoyenne( ){
$moy - array_sum($this->notes) / count($this->notes);
return $moy;
}

public function trouverMax(){
  return max($this->notes);

}
public function trouverMin(){
    return min($this->notes);


}
public function afficher(){
    echo "La moyenne de {$this->nom} est de {$this->calculerMoyenne()}.\nSa meilleure note est {$this->trouverMax()} et sa pire note est {$this->trouverMin()}";
}

}