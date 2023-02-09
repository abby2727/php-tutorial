<?php

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

// return objects (not array)
$sample_decoded = json_decode($jsonobj);

// access value
// foreach ($sample_decoded as $value) {
//     echo $value . "\n";
// }

// access key and value
foreach ($sample_decoded as $key => $value) {
    echo $key . ": " . $value . "\n";
}

// echo $sample_decoded->Ben;
// echo $sample_decoded["Ben"];
