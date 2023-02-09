<?php

class Fruit
{
    // Properties
    public $name;
    public $color;

    // Methods
    function setName($name)
    {
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }

    function setColor($color)
    {
        $this->color = $color;
    }

    function getColor()
    {
        return $this->color;
    }
}

$apple = new Fruit();
$banana = new Fruit();

$apple->setName('Apple');
$banana->setName('Banana');
$apple->setColor('Red');
$banana->setColor('Yellow');

$appleStatement = $apple->getName() . ' is ' . $apple->getColor();
$bananaStatement = $banana->getName() . ' is ' . $banana->getColor();

echo $appleStatement;
echo "\n";
echo $bananaStatement;
