<?php

class Inheritance
{
    public $name = "Dell";
    public $type = "Dog";
    public $fruit = "Apple";

    public function sayHello(){
        return "I am method of sayhello.";
    }
}

class Dell extends Inheritance
{
    //
}

$dell = new Dell;
echo $dell->name . '<br>';
echo $dell->sayHello() . '<br><hr>';


class Dog extends Inheritance
{
    //
}

$dog = new Dog;
echo $dog->type . '<br>';
echo $dog->sayHello() . '<br><hr>';


class Apple extends Inheritance
{
    public $fruit = "Orange";

    public function sayHello(){
        return "I am override method of sayHello.";
    }
}

$apple = new Apple;
echo $apple->fruit . '<br>';
echo $apple->sayHello() . '<br><hr>';