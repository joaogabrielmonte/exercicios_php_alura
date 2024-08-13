<?php 

//
function numInt(int $valor1,int $valor2, string $operacao): float{
    return match ($operacao) {
        'soma' => $valor1 + $valor2,
        'subtracao' => $valor1 - $valor2,
        'divisão' => $valor2 / $valor2,
        'multiplicao' => $valor1 * $valor2,
    };
}

