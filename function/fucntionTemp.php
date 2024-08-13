<?php 
//Crie uma função em PHP que converta graus celsius para Fahrenheit.
function temperaturaConversor(float $tempCelsius){
$conversor = ($tempCelsius * 1.8) + 32;
echo ($conversor);
}
temperaturaConversor(38);