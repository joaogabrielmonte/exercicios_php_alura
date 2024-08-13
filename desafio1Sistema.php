<?php

$saldo = 500;
$titularConta = 'joao';

do {
    echo "1. consulta saldo atual\n";
    echo "2. sacar valor\n";
    echo "3. deposito de valores\n";
    echo "4. Sair\n";

    $opcao = (int) fgets(STDIN);

    switch ($opcao) {
        case 1:
            echo "**************************\n";
            echo "titular: $titularConta\n";
            echo "saldo atual: R$ $saldo\n";
            echo "**************************\n";
            break;


        case 2:
            echo "Qual valor deseja sacar ?\n";
            $valorSaque = (float) fgets(STDIN);
            if ($valorSaque > $saldo) {
                echo "saldo insuficiente";
            } else {
                $saldo -= $valorSaque;
            }
            break;
        case 3:
            echo "quanto deseja depositar";
            $valorADepositar = (float) fgets(STDIN);
            $saldo += $valorADepositar;
            break;
        case 4:
            echo "adeus\n";
        default:
            echo "opação invalida";
            break;
    }
} while ($opcao != 4);
