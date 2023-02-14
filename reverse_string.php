<?php

function revStr($text)
{
    $myText = "";
    for ($i = strlen($text) - 1; $i >= 0; $i--) {
        $myText .= $text[$i];
    }
    return $myText;
}

echo revStr("Abdul Fahad");
