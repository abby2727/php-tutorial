<?php

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

// var_dump(json_decode($jsonobj));
$sample_decoded = json_decode($jsonobj); // return objects (not array)

foreach ($sample_decoded as $data_decoded) {
    echo $data_decoded . "\n";
}

// echo $sample_decoded->Ben;
