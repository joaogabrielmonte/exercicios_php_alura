<?php 


$filmeFavorito = "Velozes: e Furiosos";
$anoDeLancamento = 2020;
$notaFilme = (7.9 + 9 + 6.8 + 10 + 8) / 5;
$planoMega = true;
$planking = false;

$planoAceito =$planoMega || $planking;


echo " O nome do filme é $filmeFavorito"   . " com o ano de lançamento de " . $anoDeLancamento ." com sua nota de " . $notaFilme . " e é aceito com o plano " . $planoMega;

