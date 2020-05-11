<?php

class Laptop 
{
    var $name = "Acer";

    public function reName(){
        return $name = "Dell";
    }
}

$dell = new Laptop;
echo $dell->reName() . '<br><hr>';


class Animal
{
    var $type = "Dog";

    public function reName($type){  
        return "The type of animal is " . $type;
    }
}

$dog = new Animal;
echo $dog->reName('Cat') . '<br>';
echo $dog->reName('Mouse') . '<br>';
echo $dog->reName('Dear') . '<br><hr>';


class Fruit
{
    var $name = "apple";

    public function reName($name){  
        return "The fruit name is " . $name;
    }
}

$fruit = new Fruit;
echo $fruit->reName('Orange') . '<br>';
echo $fruit->reName('Mango') . '<br>';
echo $fruit->reName('Pineapple') . '<br><hr>';