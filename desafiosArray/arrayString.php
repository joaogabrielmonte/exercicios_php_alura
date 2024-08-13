<?php 


function arrayString(array $array){
    sort($array);
    return($array);
}
 $array = array("banana", "abacaxi", "laranja", "maçã");
 $array = arrayString($array);
 echo "array ordenado";
 print_r($array);



