<?php

$reverse_string = "";
for ($i = strlen($name) - 1; $i >= 0; $i--) {
    $reverse_string .= $name[$i];
}
echo $reverse_string;
