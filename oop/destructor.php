<?php

class Animal
{
    public $name;
    public $color;

    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    function __destruct()
    {
        echo "There's a {$this->name}, color {$this->color}.";
    }
}

$apple = new Animal("Cat", "black");
