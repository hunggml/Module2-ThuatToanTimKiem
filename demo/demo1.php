<?php
function search(array $numbers, int $needle): bool {
//    $totalItems = count($numbers);

    for ($i = 0; $i < count($numbers); $i++) {
        if($numbers[$i] === $needle){
            return TRUE;
        }
    }
    return FALSE;
}

$numbers = range(1, 200);
if (search($numbers, 2)) {
    echo "Found";
} else {
    echo "Not found";
}