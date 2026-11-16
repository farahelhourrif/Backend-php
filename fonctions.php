<?php
declare (strict_types=1);
function addition(float $a, float $b):float{
    return $a+$b;
}
 echo"le resultat de l'addition est".addition(3,7);

 function soustraire(float $nb1 ,float $nb2):float{
    return $nb1 - $nb2;
 }
 echo " le resultat de soubstraction est :".soustraire(5,9);

 function multiplier(float $a, float $b):float{
    return $a*$b;
 }
 echo"le resultat de multiplication est:".multiplier(2,5);


 function diviser(float $a,float $b):float{
    if ($b==0){
        throw new
        \InvalidArgumentExeption("division par zéro imposible");
    }
    else  {
        return $a/$b;
    }

 }
 echo "le resultat de division est :".diviser(6,5);
