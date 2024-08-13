<?php

$ano = 2012;

if($ano % 4 == 0 && $ano %100 != 0){
echo" o ano de $ano é bissexto";
}else{
    echo"o ano de $ano nao é bissexto";
}