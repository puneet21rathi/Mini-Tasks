<?php

function isArmstrong($num) {
    $sum = 0;
    $temp = $num;
    $count = 0;
    $n = $num;

    while ($n > 0) {
        $count++;
        $n = (int)($n / 10);
    }

    while ($temp > 0) {
        $digit = $temp % 10;
        $power = 1;
        for ($i = 0; $i < $count; $i++) {
            $power *= $digit;
        }
        $sum += $power;
        $temp = (int)($temp / 10);
    }

    if ($sum == $num) {
        return true;
    } else {
        return false;
    }
}

$numbers = [153, 998, 123, 282, 407];
foreach ($numbers as $num) {
    if (isArmstrong($num)) {
        echo $num . " is an Armstrong number\n";
    } else {
        echo $num . " is not an Armstrong number\n";
    }
}

?>