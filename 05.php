<?php

$lowest = 1;
$highest = 100;

$random = rand($lowest,$highest);

$input = (int) readline("Guess the number between {$lowest} to {$highest}: ");

/*
 * if ($input === $random) {
    echo 'You guessed it!' . PHP_EOL;
} else if ($input > $highest) {
    echo 'Entered number out of range!' . PHP_EOL;
} else if ($input > $random) {
    echo "Too high, I was thinking about {$random}" . PHP_EOL;
} else if ($input < $random) {
    echo "Too low, I was thinking about {$random}" . PHP_EOL;
}
 */

switch ($input) {
    case $input === $random;
    echo 'You guessed it!' . PHP_EOL;
    break;
    case $input > $highest;
    echo 'Entered number out of range!' . PHP_EOL;
    break;
    case $input > $random;
    echo "Too high, I was thinking about {$random}" . PHP_EOL;
    break;
    case $input < $random;
    echo "Too low, I was thinking about {$random}" . PHP_EOL;
    break;
}
