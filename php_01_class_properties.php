<?php

class Laptop
{
    var $name = "Dell";
    var $ram = "8 GB";
    var $model = "core i5";
}

$dell = new Laptop;
echo 'Name = ' .$dell->name . '<br>';
echo 'Ram = ' .$dell->ram . '<br>';
echo 'Model = ' .$dell->model . '<br><hr>'; 


class Animal
{
    var $type = "Dog";
    var $name = "Mael Lone";
    var $behavior = "Barking";
    var $color = "Black";
}

$dog = new Animal;
echo 'Name = ' .$dog->name .'<br>';
echo 'Color = ' .$dog->color . '<br>';
echo 'Behavior = ' .$dog->behavior . '<br><hr>';


class Fruit
{
    var $name = "Orange";
    var $color = "yellow";
    var $taste = "sweet";
}

$orange = new Fruit;
echo 'Name = ' .$orange->name . '<br>';
echo 'Color = ' .$orange->color . '<br>';
echo 'Taste = ' .$orange->taste . '<br><hr>';