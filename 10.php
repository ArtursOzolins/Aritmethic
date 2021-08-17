<?php

class Geometry {
    static function circleArea($r) {
        if ($r > 0) {
            return M_PI * $r * 2 . PHP_EOL;
        } else {
            echo 'Error, negative value entered' . PHP_EOL;
        }
    }
    static function rectangleArea($length, $width) {
        if ($length > 0 || $width > 0) {
            return $length * $width . PHP_EOL;
        } else {
            echo 'Error, negative value entered' . PHP_EOL;
        }
    }
    static function triangleArea($base, $height) {
        if ($base > 0 || $height > 0) {
            return $base * $height * 0.5 . PHP_EOL;
        } else {
            echo 'Error, negative value entered' . PHP_EOL;
        }
    }
}


echo "Geometry Calculator\n";
echo "1. Calculate the Area of a Circle" . PHP_EOL;
echo "2. Calculate the Area of a Rectangle" . PHP_EOL;
echo "3. Calculate the Area of a Triangle" . PHP_EOL;
echo "4. Quit\n";
$choice = (int) readline ("Enter your choice (1-4) : \n");

if ($choice === 1) {
    $userRadius = (int) readline ("Enter radius: \n");
    echo Geometry::circleArea($userRadius);
} else if ($choice === 2) {
    $userLength = (int) readline ("Enter length of the rectangle: \n");
    $userWidth = (int) readline ("Enter width of the rectangle: \n");
    echo Geometry::rectangleArea($userLength, $userWidth);
} else if ($choice === 3) {
    $userBase = (int) readline ("Enter the base length of triangle: \n");
    $userHeight = (int) readline ("Enter the height of triangle: \n");
    echo Geometry::triangleArea($userBase, $userHeight);
} else if ($choice === 4) {
    exit;
} else {
    echo "Ungiven choice, exiting...\n" ;
    exit;
}
