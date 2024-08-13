<?php

//Crie uma função em PHP que calcule o IMC baseado na altura e peso passados por parâmetro. 

function imcFuncao(float $pesoPessoa,float $alturaPessoa)
{
    $resultadoImx = $pesoPessoa / ($alturaPessoa * 2);

    if ($resultadoImx < 18.5) {
        echo " seu imc é de " . number_format($resultadoImx, 2, '.', '.') . " e estado de magreza ";
    } else if ($resultadoImx >= 18.5 && $resultadoImx < 24.9) {
        echo "seu imc é de " . number_format($resultadoImx,2, '.','.') .  " e peso normal ";
    } else if ($resultadoImx >= 24.9 && $resultadoImx < 29.9) {
        echo "seu imc é de " . number_format($resultadoImx,2, '.','.') . " e está com sobrepeso ";
    } else if ($resultadoImx >= 29.9 && $resultadoImx < 39.9) {
        echo "seu imc é de " . number_format($resultadoImx) .  " e está obeso ";
    } else {
        echo "seu imc é de " . number_format($resultadoImx, 2, '.', '.') . " e está com obesidade grave ";
    }
}

imcFuncao(92, 1.75);