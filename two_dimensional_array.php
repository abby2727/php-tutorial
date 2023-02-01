<?php

$cars = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15)
);

// for ($i = 0; $i < count($cars); $i++) {
//     for ($j = 0; $j < 3; $j++) {
//         echo $cars[$i][$j] . " ";
//     }

//     echo "<br>";
// }

for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
        echo "<li>" . $cars[$row][$col] . "</li>";
    }
    echo "</ul>";
}
