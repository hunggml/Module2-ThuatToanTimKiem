<?php
function findMin($arr)
{
    $min = $arr[0];
    for ($i = 0; $i < count($arr); $i++) {
        if ($min > $arr[$i]) {
            $min = $arr[$i];
        }
    }
    return $min;
}

function findMax($arr)
{
    $max = $arr[0];
    for ($j = 0; $j < count($arr); $j++) {
        if ($max < $arr[$j]) {
            $max = $arr[$j];
        }
    }
    return $max;
}

$nums = [];
for ($h = 0; $h < 100; $h++) {
    $nums[$h] = rand(1, 101);
}
foreach ($nums as $num) {
    echo $num . " , ";
}

$minValue = findMin($nums);
echo "<br/>";
echo "The minimum value is: " . $minValue;

$maxValue = findMax($nums);
echo "<br/>";
echo "The maximum value is: " . $maxValue;