<?php

class Lapin {
    public function tirer($chasseur) {
        echo $chasseur->getNom() . " tire sur le lapin avec son " . $chasseur->getArme() . " et... ";

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

    public function seNourrir ($lapin) {
        echo $this->nomAnimal . " Le lapin mange des carottes ";
    }

    public function fuir ($lapin) {
        echo $this->nomAnimal . " Le lapin prend la fuite ";
    }

    public function seDeplacer() {
        
    }

    public function crier() {
        echo "Le lapin glapit de peur";
        echo "<br>";
    }
}

?>
