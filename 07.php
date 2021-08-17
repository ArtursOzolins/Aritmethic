<?php

$startPoint = 0;
$fallTime = 10; // seconds
$endPoint = 0.5 * ((-9.81) * (pow($fallTime, 2)));

echo $endPoint - $startPoint;
