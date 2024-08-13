<?php

$hora = 22;

if($hora >= 5 && $hora <= 12) {
    echo "bom dia!";
} else if ($hora >=12.01 && $hora <= 18) {
    echo "boa tarde!";
}else {
    echo "boa noite!";
}
