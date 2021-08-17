<?php

$lowest = 1;
$highest = 100;

$allValues = [];
for ($i = $lowest; $i <= $highest; $i++) {
    array_push($allValues, $i);
}

$sum = array_sum($allValues);
$average = $sum / count($allValues);

echo "The sum of {$lowest} to {$highest} is {$sum}" . PHP_EOL;
echo "The average is {$average}" . PHP_EOL;


