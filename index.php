<?php

require_once "Humain.php";
require_once "Animal.php";
require_once "Interfacee.php";
require_once "Chasseur.php";
require_once "Lapin.php";

$lapin = new Lapin();
$chasseur = new Chasseur("Paul", "fusil");

echo "Le lapin blanc à 4 pattes a été créé";
echo "<br> ***********************";
echo "<br>";
echo "Le chasseur Paul a été créé avec son fusil";
echo "<br> ***********************";
echo "<br>";

$chasseur->avancer();
echo "<br>";
$lapin->crier();
echo "<br> ***********************";
echo "<br>";
$chasseur->tirer($lapin);
echo "<br>";

while (true) {
    if (!$lapin->seDeplacer()) {
        break;
    }

    $chasseur->avancer();
    $lapin->crier();
    if ($chasseur->tirer($lapin)) {
        break;
    }
}

?>