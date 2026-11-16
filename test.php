<?php 
require_once __DIR__ . "/fonctions.php";
echo"le resultat de l'addition est".addition(3,7);
echo " le resultat de soubstraction est :".soustraire(5,9);
echo"le resultat de multiplication est:".multiplier(2,5);
echo "le resultat de division est :".diviser(6,5);
try{
    echo diviser (10,0);
}
catch(\InvalidArgumentExeption $e){
    echo"Erreure:".$e->getMessage();
}
