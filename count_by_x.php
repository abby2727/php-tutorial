<?php

function countBy($x, $n)
{
    $m = $x * $n;
    $z = [];
    // for ($i = $x; count($z) < $n; $i += $x) {
    for ($i = $x; $i <= $m; $i += $x) {
        $z[] = $i;
    }
    return $z;
}
print_r(countBy(3, 5)); // [3, 6, 9, 12, 15]
print_r(countBy(1, 10)); // [1,2,3,4,5,6,7,8,9,10]
print_r(countBy(2, 5)); // [2,4,6,8,10]