<?php

class Laptop
{
    public $name = 'Acer';
    public $ram = '4 GB';
    public $cpu = 'core i3';
}

class Acer extends Laptop
{
    //
}

$acer = new Acer;
echo 'Name = ' . $acer->name . '<br>';
echo 'Ram = ' . $acer->ram . '<br>';
echo 'Model = ' . $acer->cpu . '<br><hr>';


class Animal
{
    public $type = "Cat";
    public $color = "yellow";
    public $behavior = "kill the mouse";
}

class Cat extends Animal
{
    //
}

$cat = new Cat;
echo 'Name = ' . $cat->type . '<br>';
echo 'Color = ' . $cat->color . '<br>';
echo 'Behavior = ' . $cat->behavior . '<br><hr>';


class Fruit
{
    public $name = 'Apple';
    public $color = "Red";
    public $taste = "sweet";
}

class Apple extends Fruit
{
    //
}

$fruit = new Apple;
echo 'Name = ' . $fruit->name . '<br>';
echo 'Color = ' . $fruit->color . '<br>';
echo 'Taste = ' . $fruit->taste . '<br><hr>';