<?php

//Escreva um programa em PHP que abra um arquivo chamado teste.txt para ler a primeira linha e depois o fecha.


$arquivoJson = fopen('teste.txt', 'r');
$primeiraLinha = fgetc($arquivoJson);
fclose($arquivoJson);