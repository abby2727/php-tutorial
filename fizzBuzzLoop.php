<?php

function fizzBuzzLoop()
{
    // output 1-100
    $length = 100;
    for ($i = 0; $i < $length; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "FizzBuzz \n";
        } else if ($i % 3 == 0) {
            echo "Fizz \n";
        } else if ($i % 5 == 0) {
            echo "Buzz \n";
        } else {
            echo $i . "\n";
        }
    }
}

fizzBuzzLoop();