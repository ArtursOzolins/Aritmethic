<?php

$lowest = 1;
$highest = 10;

$allValues = [];
for ($i = $lowest; $i <= $highest; $i++) {
    array_push($allValues, $i);
}

$result = $lowest;

function add(int $a,int $b): int {
    return $a * $b;
}

echo array_reduce($allValues,'add',1) . PHP_EOL;


