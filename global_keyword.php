<?php

$x = 5; // global variable

function myFunction()
{
    global $x;
    $x += 1;
    echo "Value of x inside function: $x";
}

myFunction(); // Output: "Value of x inside function: 6"
echo "Value of x outside function: $x"; // Output: "Value of x outside function: 6"
