<?php

$symb = 1;
for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 11; $j++) {
        if ($symb % 3 === 0 && $symb % 5 === 0) {
            echo 'CozaLoza ';
        } else if ($symb % 7 === 0) {
            echo 'Woza ';
        } else if ($symb % 5 === 0) {
            echo 'Loza ';
        } else if ($symb % 3 === 0) {
            echo 'Coza ';
        } else {
            echo "{$symb} ";
        }
        if ($j === 11) {
            echo PHP_EOL;
        }
        $symb++;
    }
}

