<?php

// In PHP, the "->" operator is used to access object properties and methods.
class Example
{
    public function method()
    {
        return 'Hello, World!';
    }
}

$object = new Example();
echo $object->method(); // outputs: "Hello, World!"