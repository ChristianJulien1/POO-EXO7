<?php

abstract class Humain {
    protected $nom;

    public function __construct($nom) {
        $this->nom = $nom;
    }

    public function __toString() {
        return $this->nom;
    }
}

?>