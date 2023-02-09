<?php

class Car
{
    public $name;
    public $color;

    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    function getName()
    {
        return $this->name;
    }

    function getColor()
    {
        return $this->color;
    }
}

$apple = new Car("BMY", "Black");
$statement = $apple->getName() . ' color is ' . $apple->getColor();

echo $statement;
