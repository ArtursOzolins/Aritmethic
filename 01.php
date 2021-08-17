<?php

$number1 = (int) readline('Enter first number:');
$number2 = (int) readline('Enter second number:');


function program(int $numb1, int $numb2): bool {
    $result = false;
    if ($numb1 === 15 || $numb2 === 15) {
        $result = true;
    } else if ($numb1 - $numb2 === 15 || $numb2 - $numb1 === 15) {
        $result = true;
    }
    return $result;
}

var_dump(program($number1, $number2));


