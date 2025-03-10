<?php
function minDenominations($total, $denominations) {
    $counts = [];
    $totalCount = 0;

    foreach ($denominations as $value) {
        if ($total >= $value) {
            $count = floor($total / $value); 
            $counts[$value] = $count;
            $total -= $count * $value;
            $totalCount += $count;
        }
    }

    foreach ($counts as $value => $count) {
        echo "$value → $count\n";
    }

    echo "Total Count: $totalCount\n";
}

$total = 289;
$denominations = [100, 50, 20, 10, 5, 2, 1];

minDenominations($total, $denominations);
?>