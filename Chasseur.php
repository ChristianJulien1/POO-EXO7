<?php

class Chasseur {
    private $nom;
    private $arme;

    public function __construct($nom, $arme) {
        $this->nom = $nom;
        $this->arme = $arme;
    }

    public function __ToString() {
        return $this->arme;
    }

    public function avancer() {
        echo $this->nom . " avance avec son " . $this->arme;
    }

    public function tirer($lapin) {
        echo $this->nom . " tire sur le lapin avec son " . $this->arme . " et... ";

        $random = rand(1, 6);
        if ($random === 1 || $random === 6) {
            echo "le touche";
            echo "<br>";
            echo "Les carottes sont cuites : Le pauvre petit lapin blanc est malheureusement mort :(";
            return true;
        } else {
            echo "le rate";
            echo "<br>";
            echo "Le lapin s'enfuit sur ses 4 pattes d'un seul bond !";
            return false;
        }
    }
}

?>