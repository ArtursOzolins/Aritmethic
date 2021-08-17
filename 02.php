<?php

$number = (int) readline('Enter a number to check if even or odd:');

switch($number) {
    case is_int($number) === false;
        echo 'Not a number' . PHP_EOL;
        break;
    case $number % 2 === 0;
        $result = true;
        echo 'Even Number' . PHP_EOL;
        echo 'Bye!' . PHP_EOL;
        break;
    case $number % 2 !== 0;
        $result = false;
        echo 'Odd Number' . PHP_EOL;
        echo 'Bye!' . PHP_EOL;
        break;
}



