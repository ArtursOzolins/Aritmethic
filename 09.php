<?php

$yourWeight =(int) readline('Enter your weight (kg): ');
$yourHeight =(float) readline('Enter your height (m): ');

$convertKGtoPounds = $yourWeight * 2.205;
$convertMtoInches = $yourHeight * 39.37;

function testBMI(float $weight,float $height): string {
    $optimalBMI = [18.5, 25]; // min, max
    $BMI = $weight * 703 / pow($height, 2);
    switch($BMI) {
        case $BMI < $optimalBMI[0];
            $result = 'Person is underweight';
            break;
        case $BMI > $optimalBMI[1];
            $result = 'Person is overweight';
            break;
        default:
            $result = 'Person has an optimal BMI level';
            break;
    }
    return $result;
}

echo testBMI($convertKGtoPounds, $convertMtoInches) . PHP_EOL;

