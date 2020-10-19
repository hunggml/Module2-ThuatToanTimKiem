<?php
function binarySearch(array $numbers, int $needle, int $low, int $high): bool
{

    if ($high < $low) {
        return FALSE;
    }

    $mid = (int) (($low + $high) / 2);

    if ($numbers[$mid] > $needle) {
        return binarySearch($numbers, $needle, $low, $mid - 1);
    } else if ($numbers[$mid] < $needle) {
        return binarySearch($numbers, $needle, $mid + 1, $high);
    } else {
        return TRUE;
    }
}

$numbers = range(1, 200);

$number = 2001;
if (binarySearch($numbers, $number, 0, count($numbers) - 1)) {
    echo " $number Found";
} else {
    echo " $number Not Found";
}