<?php

// Access the values of the colors
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value \n";
}

echo "\n";

// Access both keys and values of age
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

foreach ($age as $x => $val) {
  echo "$x = $val \n";
}
