<?php

abstract class Animal {
    protected $nomAnimal;
    protected $couleur;
    protected $nombrePattes;

    public function __construct($nomAnimal, $couleur, $nombrePattes) {
        $this->nomAnimal = $nomAnimal;
        $this->couleur = $couleur;
        $this->nombrePattes = $nombrePattes;
    }
    
    public function getCouleur() {
        return $this->couleur;
    }
    
    public function setCouleur($couleur) {
        $this->couleur = $couleur;
    }
    
    public function getNombrePattes() {
        return $this->nombrePattes;
    }
    
    public function setNombrePattes($nombrePattes) {
        $this->nombrePattes = $nombrePattes;
    }

    public function __toString() {
        return $this->couleur;
    }

    public function crier() {
        echo "Le lapin glapie de peur";
        echo "<br>";
    }
}

?>
