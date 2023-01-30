<?php

$my_obj = new stdClass();
$my_obj->name = "John";
$my_obj->age = 30;
$my_obj->city = "New York";

$myJSON = json_encode($my_obj); // convert into JSON formatted string

// echo gettype($my_obj);
// echo gettype($myJSON);
