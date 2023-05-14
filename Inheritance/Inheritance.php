<?php

class Fruit 
{
    public $name;
    protected $color;
    // protected can be accessed ONLY within the class itself and by inheriting


    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }


    public function getColor()
    {
        return $this->color;
    }
}


// Inheritance
// Apple is inherited from Fruit
// Apple is a subclass or the child of the Fruit
class Apple extends Fruit
{
    public $kg;
    

    public function __construct($name, $color, $kg)
    {
        $this->kg = $kg;
        parent::__construct($name, $color);
    }


    public function getColor()
    {
        return $this->color;
    }
}


$apple = new Apple('Apple', 'Red', 5);

echo $apple->name . "<br>";
echo $apple->getColor() . "<br>";
echo $apple->kg . "<br>";
echo $apple->color . "<br>";

echo "<br><br>";


$fruit = new Fruit('Banana', 'Yellow');

echo $fruit->name . "<br>";
echo $fruit->getColor() . "<br>";
echo $fruit->color . "<br>";