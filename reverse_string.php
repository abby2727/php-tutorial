<?php

$name = 'John Doe';

// * Using PHP built-in functions
echo strrev($name);
echo "\n\n";

// * Using trad loop

// Functional
function revStr($name2)
{
    $reverse_string = "";
    for ($i = strlen($name2) - 1; $i >= 0; $i--) {
        $reverse_string .= $name2[$i];
    }
    return $reverse_string;
}
echo revStr("Abdul");

// Imperative
// $reverse_string = "";
// for ($i = strlen($name) - 1; $i >= 0; $i--) {
//     $reverse_string .= $name[$i];
// }
// echo $reverse_string;
