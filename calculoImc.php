<?php


$alturaPessoa = 1.7;
$pesoPessoa  =  155;

$resultadoImx= $pesoPessoa / ($alturaPessoa *2);

if($resultadoImx <18.5){
    echo " seu imc é de $resultadoImx estado de magreza " . number_format($resultadoImx,2,'.', '.');
}else if ($resultadoImx >=18.5 && $resultadoImx < 24.9) {
    echo "seu imc é de $resultadoImx peso normal " . number_format($resultadoImx,2,'.', '.');
}else if ($resultadoImx >= 24.9 && $resultadoImx < 29.9){
    echo "seu imc é de $resultadoImx está com sobrepeso" . number_format($resultadoImx,2,'.', '.');
}else if ($resultadoImx >= 29.9 && $resultadoImx < 39.9){
    echo"seu imc é de $resultadoImx obseidade " . number_format($resultadoImx,2,'.', '.');
}else {
    echo "obesidade grave " . number_format($resultadoImx,2,'.', '.');
}