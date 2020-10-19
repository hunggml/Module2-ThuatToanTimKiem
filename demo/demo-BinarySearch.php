<?php
function binarySearch(array $numbers, int $needle): bool
{
    $low = 0;
    $high = count($numbers) - 1;
    while ($low <= $high) {
        $mid = (int)(($low + $high) / 2);

        if ($numbers[$mid] > $needle) {
            $high = $mid - 1;
        } else if ($numbers[$mid] < $needle) {
            $low = $mid + 1;
        } else {
            return TRUE;
        }
    }
    return FALSE;
}

$numbers = range(1, 200);
$number = 25;
if (binarySearch($numbers, $number)) {
    echo $number . " Found " . "<br>";
} else {
    echo $number . " Not found ";
}

$number2 = 201;
if (binarySearch($numbers, $number2)) {
    echo $number2 . " Found " . "<br>";
} else {
    echo $number2 . " Not found ";
}