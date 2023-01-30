<?php

$json = '{
        "name": "Muhammad Ishaq",
        "gender": "Male",
        "age": 23,
        "address": {
            "street": "87",
            "city": "Gultari Matyal Skardu",
            "state": "Gilgit Baltistan",
            "postalCode": "16350"
        },
        "phoneNumber": [
            { 
                "type": "personal", 
                "number": "116263747" 
            }
        ]
    }';

$json_decoded = json_decode($json);

foreach ($json_decoded->address as $key => $value) {
    echo $key . " : " . $value . "\n";
    // echo $value . "\n";
}

// echo "If you view the source of output frame \r\n you will find a newline in this string.";
// echo "<br>";
// echo nl2br("You will find the \n newlines in this string \r\n on the browser window.");
