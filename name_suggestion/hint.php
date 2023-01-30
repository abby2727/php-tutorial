<?php

$q = $_REQUEST["hi"];
$hint = "";
$a = array("Adam", "Bob", "Charlie", "David", "Edward", "Frank", "George", "Harry", "Isaac", "Jack", "Philip", "Abdul");

if ($q !== "") {
    $q = strtolower($q);
    $len = strlen($q);
    foreach ($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

echo $hint === "" ? "no suggestion" : $hint;
