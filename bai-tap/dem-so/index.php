<?php
function findCount($numbers, $value)
{
    $count = 0;
    for ($i = 0; $i < count($numbers); $i++) {
        if ($numbers[$i] == $value) {
            $count++;
        }
    }
    return $count;
}

$nums = [];
$value = 27;
for ($j = 0; $j < 100; $j++) {
    $nums[$j] = rand(1, 101);
}
foreach ($nums as $num) {
    echo $num . " , ";
}


$number = findCount($nums, $value);
echo "<br>";
echo "<br>";
echo $value . " : ". $number . " lan xuat hien" ;