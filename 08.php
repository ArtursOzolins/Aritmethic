<?php


$employee1 = new stdClass();
$employee1->basePay = 7.50;
$employee1->hours = 35;

$employee2 = new stdClass();
$employee2->basePay = 8.20;
$employee2->hours = 47;

$employee3 = new stdClass();
$employee3->basePay = 10;
$employee3->hours = 73;

function wageCalc($paidInHour, $totalWeekHours) {
    $lawBasePay = 8;
    $lawBaseHours = 40;
    $lawAfterHoursCoef = 1.5;
    $lawAfterHoursBasePay = $lawBasePay * $lawAfterHoursCoef;
    $corpHourLimit = 60;
    $paymentAfterHours = 0;
    if ($paidInHour < $lawBasePay) {
        $result = 'Error, too small Base Pay' . PHP_EOL;
    } else if ($totalWeekHours > $corpHourLimit) {
        $result = 'Error, too much hours this week' . PHP_EOL;
    } else {
        if ($totalWeekHours > $lawBaseHours) {
            $paymentAfterHours = ($totalWeekHours - $lawBaseHours) * $lawAfterHoursBasePay;
        }
        $earnings = $paidInHour * $lawBaseHours + $paymentAfterHours;
        $result = "Total pay for this employee is: {$earnings}" . PHP_EOL;
    }
    return $result;
}

function checkWage($employee) {
    return wageCalc($employee->basePay, $employee->hours);
}

echo checkWage($employee3);



